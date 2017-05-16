  <div class="block col-md-3 col-md-offset-2">
             <select  id="sel_menu2"  name="company_name" class="form-control">
             @foreach($companies as $company)
                       <option value="{{$company->name}}">{{$company->name}}</option>
              @endforeach
             </select>     
  </div>   
