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

                <div class="d-flex align-items-center">
                  <div class="d-flex flex-column flex-start">
                    <div class="p-2">
                      <input class="delInput d-flex flex-start" id="g1v1" type="radio" value="value1" name="group1">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 imageDiv1 align-items-center">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 ">
                      Paczkomaty 24/7
                    </div>
                  </div>
                  <div class="d-flex flex-column  mlauto">
                    <div class="p-2 ">22,00zł</div>
                  </div>
                </div>

                <div class="d-flex align-items-center">
                  <div class="d-flex flex-column flex-start">
                    <div class="p-2">
                      <input class="delInput d-flex flex-start" id="g1v2" type="radio" value="value2" name="group1">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 imageDiv2 align-items-center">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 ">
                      Kurier DPD
                    </div>
                  </div>
                  <div class="d-flex flex-column mlauto">
                    <div class="p-2">18,00zł</div>
                  </div>
                </div>

                <div class="d-flex align-items-center">
                  <div class="d-flex flex-column flex-start">
                    <div class="p-2">
                      <input class="delInput d-flex flex-start" id="g1v3" type="radio" value="value3" name="group1">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 imageDiv3 align-items-center">
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="p-2 ">
                      Kurier DPD pobranie
                    </div>
                  </div>
                  <div class="d-flex flex-column mlauto">
                    <div class="p-2 ">22,00zł</div>
                  </div>
                </div>


                
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

                    <div class="d-flex align-items-center">
                      <div class="d-flex flex-column flex-start">
                        <div class="p-2">
                          <input class="payInput d-flex flex-start" id="g2v1" type="radio" value="value1" name="group2">
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="p-2 imageDiv4">
                          <label class="form-image-label " type="image" name="" id="" value="">
                          </label>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="p-2 ">PayU</div>
                      </div>
                    </div>

                    <div class="d-flex align-items-center">
                      <div class="d-flex flex-column flex-start">
                        <div class="p-2">
                          <input class="payInput d-flex flex-start" id="g2v2" type="radio" value="value2" name="group2">
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="p-2 imageDiv5">
                          <label class="form-image-label " type="image" name="" id="" value="">
                          </label>
                        </div>
                      </div>
                      <div class="d-flex flex-column ">
                        <div class="p-2 ">Płatność przy odbiorze</div>
                      </div>
                    </div>

                    <div class="d-flex align-items-center  ">
                      <div class="d-flex flex-column flex-start">
                        <div class="p-2">
                          <input class="payInput d-flex flex-start" id="g2v3" type="radio" value="value3" name="group2">
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="p-2 imageDiv6">
                          <label class="form-image-label " type="image" name="" id="" value="">
                          </label>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="p-2 ">Przelew bankowy zwykły</div>
                      </div>
                     </div>

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
            
           <div class="d-flex justify-content-around">
            <div class="d-flex align-items-center">
              <div class="resize"></div>
            </div>
             <div class="d-flex flex-column">
              <div class="p-2"><span>Testowy product</span></div>
              <div class="p-2">Ilość 1</div>
            </div>
            <div class="d-flex flex-column">
              <div class="p-2 "><span>116zł</span></div>
            </div>
           </div>
          
            
           <div class="productSum">
           <div class="d-flex justify-content-around">
           <div class="d-flex flex-column">
            <div class="p-2">Cena produktu</div>
            <div class="p-2">Vat</div>
            <div class="p-2">Dostawa</div>
            <div class="p-2 textLSizeBold">Łącznie</div>
          </div>
          <div class="d-flex flex-column ">
            <div class="p-2  mlauto">115,00zł</div>
            <div class="p-2  mlauto">$cena*0,23)</div>
            <div class="p-2  mlauto">16zł </div>
            <div class="p-2  textLSizeBold mlauto">157,45zł </div>
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
