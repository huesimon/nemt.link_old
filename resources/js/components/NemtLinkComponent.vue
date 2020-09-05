<template>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-xs-12">
                <div class="title d-flex justify-content-center">
                    <h1 v-if="!shortLink">nemt link</h1>
                    <h1 v-else> {{ shortLink }} </h1>
                </div>
                <form v-on:submit.prevent  @submit="onClick()">
                    <div class="prompt" style="">
                        <input @paste="onPaste()" v-model="formData.link" type="url" data-test="focus-input" autocomplete="off" id="url" name="url">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center m-2">
            <div>
                <button type="button" class="btn btn-primary"
                    v-clipboard:copy="shortLink"
                    v-clipboard:success="onCopy"
                    v-clipboard:error="onError">Copy!</button>
            </div>
        </div>
    </div>
</template>

<script>
    import VueClipboard from 'vue-clipboard2'

    Vue.use(VueClipboard)
    export default {
        data() {
            return {
                formData: {
                    link: '',
                    shortLink: null
                },
                shortLink: null,
                showToolTip: true
            }
        },
        methods:{
            onClick(){
                var newUrl = this.formData.link
                console.log('step 1: ' + this.formData.link)
                try {
                    new URL(newUrl);
                    console.log('trying')
                } catch (_) {
                    console.log('failed')
                    return false
                }
                console.log('worked')
                axios.post('/shorturl',
                    {
                        url : newUrl
                    },
                    {
                        headers: {
                            'content-type': 'application/json',
                        }
                    }).then(response => {
                        this.shortLink = response.data;
                        console.log(response.data);console.log('response')
                });
            console.log('done')
            },
            onPaste() {
                
                var self = this
                setTimeout(function() {
                    self.onClick()
                },1000);
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
        
        props: ['endpoint'],
    }
</script>
