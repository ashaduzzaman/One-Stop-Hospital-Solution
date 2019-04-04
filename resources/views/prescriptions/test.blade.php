<form>
    <div class="form-group text-center"><strong>Tests</strong></div>
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <select class="form-control" id="test" v-model="newTest">
            <option value="" disabled selected>Select your option</option>
                @foreach($tests as $test)
                <option value="{{ $test->name}}"  id="name">{{ $test->name}}</option>
                @endforeach
            </select> 
                <p class="text-danger">{{$errors->first('name')}}</p>
            </div>
            <div class="btn col-md-1" id="button">
                <button class="btn" @click.prevent="addTest"><i class="fas fa-plus"></i></button>
            </div>

            <div class="col-md-10">
            <ul style="list-style: none;" class="styleUl">
                <li v-for="(test,index) in tests">
                    <span>@{{++index}} . @{{ test.name }}</span>
                    <button @click="removetest(test)" type="button" class="btn btn-outline-danger float-right"><i class="fas fa-trash"></i></button>
                </li>
            </ul>
            </div>
    </div>
</form>
