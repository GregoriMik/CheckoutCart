<div class="container "style="margin-top:10px">
    <div class="row">
      <!-- PIERWSZA KOLUMNA -->
      <div class="col-sm">
        <form>

            <div class="form-group center-block">
                <div class="" style="width: 100%; ">
                  
                  <div class="card-header two clearfix">
                    <div id="input_container">
                      
                      <img src="{{ asset('assets/images/sectionLabels/user.png') }}" id="input_img">
                      <div class="card-header-content">1.twoje dane</div>
                    </div>
                  </div>

                    
                        <button type="button" class="btn btn-outline-danger topbtn "style="width: 100%;" >Logowanie</button>
                        <small id="emailHelp" class="form-text text-muted text-center" >Masz już konto? Kliknij żeby się zalogować
                        </small>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input " checked="checked" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Stwórz nowe konto</label>
                        </div>
                    </br>
                    <div class="form-group disabled">
                      <label for="exampleInputEmail1"></label>
                      <input type="email"disabled class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="admin"style="color:black">
                  </div>
                  <div class="form-group ">
                        <label for="exampleInputEmail1 "></label>
                        <input type="email" class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Email">
                  </div>

                  <div class="form-group align-items-center">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-9">
                        <input type="password"value="1234" class="form-control inputmargin" id="fieldPassword1" value=""placeholder="Hasło" >
                      </div>
                      <div class="col-2 justify-content-between align-items-center">
                      <div class="formEye1"id="formEye1"onclick="visiblePassword1()"></div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-9">
                          <input type="password"value="1234" class="form-control inputmargin" id="fieldPassword2" placeholder="Potwierdź Hasło" >
                        </div>
                          <div class="col-2 justify-content-between align-items-center">
                           <div class="formEye1 "id="formEye2"onclick=visiblePassword2()></div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                        <label for="inputName "></label>
                        <input required type="text" class="form-control " id="inputAddress" placeholder="Imię *">
                  </div>
                  <div class="form-group">
                        <label for="inputAddress2"></label>
                        <input required  type="text" class="form-control " id="inputAddress2" placeholder="Nazwisko *">
                  </div>

                  <div class="form-group">
                    <label for="phone"></label>
                    <input  required  type="text" class="form-control " id="" placeholder="Telefon *">
                  </div>
                  <fieldset id="adres1">
                    <div class="form-group">
                          <label for="inputAddress2 form1adres"></label>
                          <input type="text" class="form-control   adres1" id="inputAddress1" placeholder="Adres *">
                    </div>

                    <div class="row">
                        <div class="col form-group form1kp">
                          <label for="inputPostCode"></label>
                          <input type="text" class="form-control  adres1" id="inputKp1" placeholder="Kod pocztowy*">
                    </div>

                    <div class="col">
                          <label for="inputCity form1city"></label>
                          <input  type="text" class="miasto1 form-control  adres1" placeholder="Miasto*">
                    </div>
                        
                  </div>

                    <div class="form-group form1country ">
                      <label for="inputAddress2 "></label>
                        <select  type="text"class="form-control adres1">
                          <option>Polska</option>
                          <option>Niemcy</option>
                        </select>                            

                    </div>
                  
                  
                </fieldset>
                <div class="form-group ">
                  <div class="form-check ">
                  <input class="form-check-input" type="checkbox"  value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                              Dostawa pod inny adres
                  </label>
                </div>
              </form>
              
               <!-- Dostawa pod inny adres -->
                <fieldset id="adres2">
                 <div class="remover"id="checkBox1">   
                 
                    
                    <div class="form-group">
                      <label for="inputAddress form2adres"></label>
                      <input  required type="text" class="form-control   adres2" id="inputAdres" placeholder="Adres *">
                    </div>
                    <div class="row">
                      <div class="col form-group form2kp">
                        <label for="inputPostCode"></label>
                        <input type="text" class="form-control  adres2"  placeholder="Kod pocztowy *">
                      </div>
                      <div class="col form2city">
                        <label for="inputCity"></label>
                        <input type="text" class="form-control  adres2" placeholder="Miasto *">
                      </div>
                      
                    </div>
                    <div class="form-group form2country">
                      <label for="inputAddress2 "></label>
                      <select disable="false"type="text" class="form-control adres2">
                          <option>Polska</option>
                          <option>Niemcy</option>
                      </select>                            
                    </div>
                  </div>
                </fieldset>
               </div>
              
              <!-- Dostawa pod inny adres -->
            </div>
          
           
          </form>
    </div>
    <!-- PIERWSZA KOLUMNA -->
    <!-- DRUGA KOLUMNA -->
    <div class="col-sm">
      
         <div class="card-header two clearfix">
          <div id="input_container">
            
            <img src="{{ asset('assets/images/sectionLabels/truck.png') }}" id="input_img">
            <div class="card-header-content">2.metoda dostawy</div>
          </div>
        </div>

        <div class="container">
          <form>
              <fieldset id="group1">
                @foreach ($delivery as $deliver)
                  <div class="d-flex align-items-center">
                    <div class="d-flex flex-column flex-start">
                      <div class="p-2">
                        <input class="delInput d-flex flex-start" id="{{$deliver->idd}}" type="radio" value="{{$deliver->val}}" name="{{$deliver->nam}}">
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <div class="p-2 align-items-center">
                        <img class="resizes" src="{{ asset('assets/images/deliveryMethods') }}/{{$deliver->image}}" alt="{{$deliver->name}}"> 
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <div class="p-2 ">
                        {{$deliver->title}}
                      </div>
                    </div>
                    <div class="d-flex flex-column  mlauto">
                      <div name="del_p"class="p-2 dpay"id="{{$deliver->price_id}}">
                        {{$deliver->regular_price}}
                      </div>
                    </div>
                  </div>
                @endforeach

                
              </fieldset>
           </form>
        </div>
        
          
          <div class="card-header two clearfix">
            <div id="input_container">
              
              <img src="{{ asset('assets/images/sectionLabels/cart.png') }}" id="input_img3">
              <div class="card-header-content">3.metoda płatności</div>
            </div>
          </div>

                  
          <div class="container">
                <form>
                  <fieldset id="group2">
                    @foreach ($payment as $pay)
                      <div class="d-flex align-items-center">
                        <div class="d-flex flex-column flex-start">
                          <div class="p-2">
                            <input class="payInput d-flex flex-start" id="{{$pay->idd}}" type="radio" value="{{$pay->val}}" name="{{$pay->nam}}">
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <div class="p-2 ">
                            <label class="form-image-label " type="image" name="" id="" value="">
                              <img class="resizes" src="{{ asset('assets/images/paymantMathods') }}/{{$pay->image}}" alt="{{$pay->title}}"> 
                            </label>
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <div class="p-2  ">{{$pay->title}}</div>
                        </div>
                      </div>
                    @endforeach
                  </fieldset>
                </form>
          </div>
          
        
        
        <div type="button" id="rbtC"class="btn btn-block discountCode ">Dodaj kod rabatowy</div>
        <div class="remover"id="show">
        <section type="input"class="btn btn-block">
          <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control exchange" id="exchange" placeholder="Posiadasz kod rabatowy?">
          </div>
          
        </section>
        <div type="button" class="btn btn-block discountCode">Prześlij</div>
      </div>
    </div>
    <!-- DRUGA KOLUMNA -->
    <!-- TRZECIA KOLUMNA -->
      <div class="col-sm">
     
             <div class="card-header four clearfix">
              <div id="input_container">
                
                <img src="{{ asset('assets/images/sectionLabels/list.png') }}" id="input_img">
                <div class="card-header-content">4. podsumowanie</div>
              </div>
            </div>
            



            @foreach (Cart::content() as $item)
           <div class="d-flex justify-content-around">
            <div class="d-flex align-items-center">
                <img class="resize"src="{{ ('assets/images/products') }}/{{ $item->model->image }}" alt="{{$item->model->name}}">
              
            </div>
             <div class="d-flex flex-column">
              <div class="p-2"><span>{{$item->model->name}}</span></div>
              <div class="p-2">{{$item->qty}}</div>
            </div>
            <div class="d-flex flex-column">
              <div class="p-2 "><span>{{ $item->model->regular_price }} zł</span></div>
            </div>
           </div>
           @endforeach
           
           <div class="productSum">
           <div class="d-flex justify-content-around">
           <div class="d-flex flex-column">
            <div class="p-2">Cena produktów</div>
            <div class="p-2">Vat</div>
            <div class="p-2">Dostawa</div>
            <div class="p-2 textLSizeBold">Łącznie</div>
          </div>
          
          <div class="d-flex flex-column ">
            <div class="p-2  mlauto">{{Cart::subtotal()}} zł</div>
            <div class="p-2  mlauto">{{Cart::tax()}} zł</div>
            <div id="confirm_deliver"name="del_name"class="p-2  mlauto">

              @if (@isset($deliver->$this->regular_price))
               <div>$deliver->$this->regular_price</div> zł
              @else
              0.00 zł
              @endif
              </div>
              
            <div class="p-2  textLSizeBold mlauto"id="t_total">{{Cart::total()}}zł</div>
          </div>
        </div>
      </div>
      <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="areaBorder form-control text-capitalize" id="exampleFormControlTextarea1"placeholder="Komentarz" rows="3"></textarea>
          </div>

          <div class="form-check">
            
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="defaultCheck1">
              Zapisz się, aby otrzymywać newsletter</label>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="defaultCheck1">
              Zapoznałem się z<a href="#"> Regulaminem </a>zakupów</label>
            </label>
          </div>
          <div type="button" class="btn text-center shopConfirmPurchase">
            Potwierdź zakup
          </div>
      </div>
      <!-- TRZECIA KOLUMNA -->
    </div> 
      
      

  </div>
