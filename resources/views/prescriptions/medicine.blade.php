<form>
    <div class="form-group text-center"><strong>Medicines</strong></div>
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <select class="form-control" id="medicine" v-model="newMedicine">
            <option value="" disabled selected>Select your option</option>
                @foreach($medicines as $medicine)
                <option value="{{ $medicine->name}}" id="{{ $medicine->id}}">{{ $medicine->name}}</option>
                @endforeach
            </select> 
                
            </div>
            <div class="save btn col-md-1">
                <button class="btn" @click.prevent="addMedicine"><i class="fas fa-plus"></i></button>
            </div>

            <div class="col-md-10">
            <ul style="list-style: none;" class="styleUl">
                <li v-for="(medicine,index) in medicines">
                    <span>@{{++index}} . @{{ medicine.name }}</span>
                    <button @click="removeMedicine(medicine)" type="button" class="btn btn-outline-danger float-right"><i class="fas fa-trash"></i></button>
                </li>
            </ul>
            </div>
    </div>
</form>


