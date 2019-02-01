{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="UTF-8">--}}
{{--<meta name="viewport"--}}
{{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--<title>Document</title>--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
{{--<style>--}}
{{--.list-group{--}}
{{--overflow-y: scroll;--}}
{{--height: 200px;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--<div class="row" id="app">--}}
{{--<input type="text" class="form-control" placeholder="Type somthing....." v-model="message" @keyup.enter="send()">--}}
{{--<div class="offset-4 col-4">--}}
{{--<li class="list-group-item active">Chat Room</li>--}}
{{--<ul class="list-group" v-chat-scroll>--}}

{{--@{{ chat.message. }}--}}

{{--<message--}}
{{--v-for="value,index in chat.message"--}}
{{--:key="value.index"--}}
{{--:color=chat.color[index]--}}
{{--:user="chat.user[index]"--}}
{{-->--}}
{{--@{{ value[0].disease_name }}--}}
{{--@{{ value[0].percentage }}--}}
{{--@{{ value }}--}}
{{--</message>--}}
{{--</ul>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--<script src="{{asset('js/app.js')}}"></script>--}}
{{--</body>--}}
{{--</html>--}}


{{--<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" id="app">
    <div class="col-md-12 mt-1">
        <form>
            <p class="text-left"><h2>List Gejala</h2></p>
            <div class="row">
                <div class="col-md-3" v-for="symtomp in symptoms" v-bind:key="symtomp.id">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symtomp" :id="symtomp.id" :value="symtomp.name" v-model="selectedSymtomp">
                        <label class="form-check-label" :for="symtomp.id">
                            @{{symtomp.name}}
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-md-3 col-form-label">Gejala yang di rasakan</label>
                <div class="col-sm-10 col-md-4">
                    <textarea name="symtomp" class="form-control" v-model="symtompFelt">@{{selectedSymtomp.join(' ')}}</textarea>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary text-right" @click="seenValue1=true">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12" v-if="seenValue1">
        <ul class="list-group primary">
            <li class="list-group-item list-group-item-secondary">
                <b>@{{diseaseList[0].diseaseName}}</b>
                <span class="badge badge-success badge-pill ml-2">@{{diseaseList[0].percentage}}</span>
                <hr>
                <p class="text-justify">@{{diseaseList[0].diseaseDescription}}</p>
                <div class="row">
                    <div class="col-md-3">
                        <b>Indikator Gejala</b>
                        <ul>
                            <li v-for="indikatorSymtop in diseaseList[0].symtompIndikators">@{{indikatorSymtop}}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <b>Gejala yang dirasakan</b>
                        <p>@{{symtompFelt}}</p>
                    </div>
                </div>
                <p class="text-right">
                    <a href="javascript:void(0);" class="badge badge-primary" @click="seenValue2=true">Lihat Kemungkinan lain</a>
                </p>
            </li>
        </ul>
    </div>
    <div class="col-md-12" v-if="seenValue2">
        <p class="text-left"><h4>Kemungkinan Penyakit lain</h4></p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Penyakit</th>
                <th scope="col">Indikator Gejala</th>
                <th scope="col">Persentase</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(disease,index) in diseaseList">
                <th scope="row">@{{index+1}}</th>
                <td>@{{disease.diseaseName}}</td>
                <td>@{{disease.symtompIndikators.join(',')}}</td>
                <td>@{{disease.percentage}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
--}}{{--<script type="text/javascript">
    var vm = new Vue({
        el: '#app',
        data: {
            symtompList: [
                { id: 1, name: 'Batuk' },
                { id: 2, name: 'Pusing' },
                { id: 3, name: 'Sakit Perut' },
                { id: 4, name: 'Sesak nafas' },
                { id: 5, name: 'nyeri dada' },
                { id: 6, name: 'cegukan' },
                { id: 7, name: 'pernafasan yang cepat' },
                { id: 8, name: 'nyeri perut' },
                { id: 9, name: 'denyut jantung cepat' },
                { id: 10, name: 'kulit lembab' },
                { id: 11, name: 'kulit berwarna kebiruan' },
                { id: 12, name: 'nyeri pinggul' }
            ],
            selectedSymtomp:[],
            seenValue1:false,
            seenValue2:false,
            symtompFelt:'',
            diseaseList:[
                {
                    diseaseName:'Demam Berdarah',
                    percentage:'90 %',
                    diseaseDescription:'Demam berdarah atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul'
                    ],
                    // symtompFelt:[
                    // 	'Sesak nafas',
                    // 	'denyut jantung cepat',
                    // 	'kulit lembab',
                    // 	'kulit berwarna kebiruan',
                    // 	'nyeri pinggul',
                    // 	'Batuk'
                    // ]
                },
                {
                    diseaseName:'Demam Berdarah dengung',
                    percentage:'80 %',
                    diseaseDescription:'Demam berdarah dengung atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul',
                        'cegukan'
                    ],
                },
                {
                    diseaseName:'Demam Berdarah dengung',
                    percentage:'80 %',
                    diseaseDescription:'Demam berdarah dengung atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul',
                        'cegukan'
                    ],
                }

            ]

        }
    });
</script>--}}{{--

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>--}}



        <!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" id="app">
    <div class="col-md-12 mt-1">
        {{--<h1>@{{ diagnosis }}</h1>--}}
        <form>
            {{--<h1>@{{ symptoms }}</h1>--}}
            <p class="text-left"><h2>List Gejala</h2></p>
            <div class="row">
                <div class="col-md-3" v-for="symtomp in symptoms" v-bind:key="symtomp.symptom_id">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="symtomp" :id="symtomp.symptom_id" :value="symtomp.symptom_name" v-model="selectedSymtomp">
                        <label class="form-check-label" :for="symtomp.symptom_id">
                            @{{symtomp.symptom_name}}
                        </label>
                    </div>
                </div>
            </div>
            {{--<h1>@{{ selectedSymtomp }}</h1>--}}
            <hr>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-md-3 col-form-label">Gejala yang di rasakan</label>
                <div class="col-sm-10 col-md-4">
                    <textarea name="symtomp" class="form-control" v-model="symptomTexts" @keyup.enter="send()"></textarea>
                </div>
                {{--<h1>@{{ symptomTexts }}</h1>--}}
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary text-right" v-on:click="send()">Submit</button>
                </div>
            </div>
            {{--<h1>@{{ symptomTexts }}</h1>--}}
        </form>
    </div>
    <div class="col-md-12">
        <ul class="list-group primary">
            <li class="list-group-item list-group-item-secondary">
                <b v-if="chat.message.length != 0">@{{  chat.message[0][0].disease_name}}</b>
                {{--<b v-if="chat.message.length != 0"> @{{ symptomTexts }} </b>--}}
                <span v-if="chat.message.length != 0" class="badge badge-success badge-pill ml-2"></span>
                <span v-if="chat.message.length != 0">@{{ chat.message[0][0].percentage }}</span>
                {{-- percentage --}}
                <hr>
                <p class="text-justify"></p>
                {{--@{{diseaseList[0].diseaseDescription}}--}}
                <div class="row">
                    <div class="col-md-3">
                        <b>Indikator Gejala</b>
                        <ul>
                            {{--<li v-for="indikatorSymtop in diseaseList[0].symtompIndikators">@{{indikatorSymtop}}</li>--}}
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <b>Gejala yang dirasakan</b>
                        {{--<p>@{{symtompFelt}}</p>--}}
                    </div>
                </div>
                <p class="text-right">
                    <a href="javascript:void(0);" class="badge badge-primary" >Lihat Kemungkinan lain</a>
                </p>
            </li>
        </ul>
    </div>
    <div class="col-md-12" >
        <p class="text-left"><h4>Kemungkinan Penyakit lain</h4></p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Penyakit</th>
                <th scope="col">Indikator Gejala</th>
                <th scope="col">Persentase</th>
            </tr>
            </thead>
            <tbody>
            <tr  v-for="(disease,index) in chat.message[0]">
                <th v-if="index !=0" scope="row">@{{index+1}}</th>
                <td v-if="index !=0" >@{{disease.disease_name}}</td>
                <td v-if="index !=0">@{{ paramSymptom }}</td>
                <td v-if="index !=0" >@{{disease.percentage}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
{{--<script type="text/javascript">
    var vm = new Vue({
        el: '#app',
        data: {
            symtompList: [
                { id: 1, name: 'Batuk' },
                { id: 2, name: 'Pusing' },
                { id: 3, name: 'Sakit Perut' },
                { id: 4, name: 'Sesak nafas' },
                { id: 5, name: 'nyeri dada' },
                { id: 6, name: 'cegukan' },
                { id: 7, name: 'pernafasan yang cepat' },
                { id: 8, name: 'nyeri perut' },
                { id: 9, name: 'denyut jantung cepat' },
                { id: 10, name: 'kulit lembab' },
                { id: 11, name: 'kulit berwarna kebiruan' },
                { id: 12, name: 'nyeri pinggul' }
            ],
            selectedSymtomp:[],
            seenValue1:false,
            seenValue2:false,
            symtompFelt:'',
            diseaseList:[
                {
                    diseaseName:'Demam Berdarah',
                    percentage:'90 %',
                    diseaseDescription:'Demam berdarah atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul'
                    ],
                    // symtompFelt:[
                    // 	'Sesak nafas',
                    // 	'denyut jantung cepat',
                    // 	'kulit lembab',
                    // 	'kulit berwarna kebiruan',
                    // 	'nyeri pinggul',
                    // 	'Batuk'
                    // ]
                },
                {
                    diseaseName:'Demam Berdarah dengung',
                    percentage:'80 %',
                    diseaseDescription:'Demam berdarah dengung atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul',
                        'cegukan'
                    ],
                },
                {
                    diseaseName:'Demam Berdarah dengung',
                    percentage:'80 %',
                    diseaseDescription:'Demam berdarah dengung atau demam berdarah dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus Dengue. Virus ini masuk ke dalam tubuh manusia melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus, yang hidup di wilayah tropis dan subtropis',
                    symtompIndikators:[
                        'Sesak nafas',
                        'denyut jantung cepat',
                        'kulit lembab',
                        'kulit berwarna kebiruan',
                        'nyeri pinggul',
                        'cegukan'
                    ],
                }

            ]

        }
    });
</script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>--}}
{{--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
{{--<script src="//js.pusher.com/3.1/pusher.min.js"></script>--}}
{{--<script src="{{asset('js/app.js')}}"></script>--}}
{{--<script src="{{asset('js/script.js')}}"></script>--}}

<script src="{!! asset('js/app.js') !!}"></script>

</body>
</html>