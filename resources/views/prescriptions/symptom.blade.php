<form>
    <div class="form-group text-center"><strong>Symptoms</strong></div>
    <div class="row" id="myDIV">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!! Form::text('name',null, ['id' => 'name', 'class' =>'form-control ', 'placeholder' => 'Symptoms', 'v-model' => 'newSymptom']) !!}
                <p class="text-danger">{{$errors->first('name')}}</p>
            </div>
            <div class="btn col-md-1" id="button">
                <span class="btn" @click.prevent="addSymptoms"><i class="fas fa-plus"></i></span>
            </div>
            <div class="col-md-10">
                <ul style="list-style: none;" class="styleUl">
                    <li v-for="(symptom,index) in symptoms">
                        <span>@{{++index}} . @{{ symptom.name }}</span>
                        <button @click="removeSymptom(symptom)" type="button" class="btn btn-outline-danger float-right"><i class="fas fa-trash"></i></button>
                    </li>
                </ul>
            </div>
    </div>
</form>


