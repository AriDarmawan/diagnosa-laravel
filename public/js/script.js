// import Vue from "vue"
// import axios from "axios"
// import Echo from "laravel-echo"

const Echo =require("laravel-echo");
const express = require("express");

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'd9fb9b7810cf5c4cb65f',
    cluster: 'ap1',
    encrypted: true
});



let app = new Vue({
    el: '#app',
    data:{
         /*message:'',
         symptom:'',
         chat:{
             message: [],
             user:[],
             color:[]
         },*/
         /*doctor:{
             symptoms : [],
             diagnosis : [],
         }*/

        symptoms:{},
        selectedSymtomp : [],
        symptomTexts: "",
        paramSymptom: "",
        diagnosis:{},
    },

    methods:{
        send(){
            console.log(this.symptomTexts);
            console.log(this.selectedSymtomp);

            for (i = 0; i < this.selectedSymtomp.length; i++)
            {
                this.paramSymptom = this.paramSymptom + " " + this.selectedSymtomp[i];
            }

            this.paramSymptom = this.paramSymptom + " " + this.symptomTexts;

            axios.post('http://127.0.0.1:8000/diagnosis', {
                symptomsList: this.paramSymptom,
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });





        }
    },

    mounted(){
        var pusher = new Pusher('d9fb9b7810cf5c4cb65f', {
            cluster: 'ap1',
            encrypted: true
        });

        var channel = pusher.subscribe('chat');

        channel.bind('App\Events\ChatEvent.php', function (data) {
            this.diagnosis =data;
            console.log(this.diagnosis);
        });
        // axios.get('http://localhost:8000/symptom').then(response =>{this.symptoms = response});
        axios({
            method: 'get',
            url: 'http://127.0.0.1:8000/symptom',
        }).then(response => (this.symptoms= response.data.data));

        console.log('adsasdad');
        console.log(this.symptoms);

        Echo.channel('chat')
            .listen('ChatEvent', (e) => {
                this.chat.message.push(e.message);
                this.diagnosis = e;
                console.log("Hasil pusher === "+ e)
            });


    }
});
Echo.channel('chat')
    .listen('ChatEvent', (e) => {
        this.diagnosis = e;
        console.log("Hasil pusher === "+ e)
    });
