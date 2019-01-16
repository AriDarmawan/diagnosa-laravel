<form method="post" action="{{ route('test') }}" id="app">

    @php($i = 0)

    @foreach( $symptoms as $symptom )

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox{{$i}}" name="symptomCheckbox[]" value="{{$symptom->symptom_name}}">
            <label class="form-check-label" for="inlineCheckbox{{$i}}">{{$symptom->symptom_name}}</label>
        </div>
        @php($i++)
    @endforeach
        <br>


    <button type="button" v-on:click="setInput()">Tulis gejala</button>
    <br><br>
    <div class="form-group" v-if="chooseInput == 1 ">
        <label for="exampleInputEmail1">Tulis gejala</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input gejala" name="symptom">
    </div>
    <br>
    {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
<script src="{{asset('js/script.js')}}"></script>