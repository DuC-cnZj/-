  <div class="block col-md-3 col-md-offset-2">
             <select  id="sel_menu2"  name="station_name" class="form-control">
@foreach($companies as $company)
   <optgroup label="{{$company->name}}">
      @foreach($company->stations as $station)
       <option value="{{$station->name}}">{{$station->name}}</option>
       @endforeach
   </optgroup>
@endforeach
             </select>     
  </div>   