 <?php 

var_dump($_POST);
 ?> 

    <div class="row">
        <div class="col">
          <form id="msform" action="submit.php" method="post" data-autosubmit>
            <!-- Step 1 -->
            <fieldset>
              <h2 class="fs-title">Step 1</h2>
              <h3 class="fs-subtitle">Tell us about your device.</h3>
              <div class="form-group">
                <label for="brand">Brand</label>
                <select class="form-control" id="brand" name="brand" required>
                  <option value="" selected data-default>- Device Brand -</option>
                  <option value="Apple">Apple</option>
                  <option value="Samsung">Samsung</option>
                </select>
              </div>
              <div class="form-group">
                <label for="model">Model</label>
                <select class="form-control" id="model" name="model" required>
                  <option value="" selected data-default>- Device Model -</option>
                  <option value="iPhone 8">iPhone 8</option>
                  <option value="iPhone X">iPhone X</option>
                  <option value="Galaxy S8">Galaxy S8</option>
                  <option valaue="Galaxy S9">Galaxy S9</option>
                  <option value="Galaxy S10">Galaxy S10</option>
                </select>
              </div>
              <div class="form-group">
                <label for="variant">Storage</label>
                <select class="form-control" id="variant" name="variant" required>
                  <option value="" selected data-default>- Storage Size -</option>
                  <option value="iPhone 8 - 64GB">iPhone 8 - 64GB</option>
                  <option value="iPhone 8 - 256GB">iPhone 8 - 256GB</option>
                  <option value="iPhone X - 64GB">iPhone X - 64GB</option>
                  <option value="iPhone X - 256GB">iPhone X - 256GB</option>
                  <option value="Galaxy S8 - 64GB">Galaxy S8 - 64GB</option>
                  <option valaue="Galaxy S9 - 64GB">Galaxy S9 - 64GB</option>
                  <option value="Galaxy S10 - 128GB">Galaxy S10 - 128GB</option>
                </select>
              </div>
              <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <!--Step 1 End-->

            <!--Step 2-->
            <fieldset>
              <h2 class="fs-title">Step 2</h2>
              <h3 class="fs-subtitle">Now we need to know more about your device's condition.</h3>
              <div class="form-group">
                <label for="screen">How is your device's <b>screen</b>?</label>
                <select class="image-picker form-control" id="screen" name="screen" required>
                  <option value="0" data-img-src="">Flawless, no scratches!</option>
                  <option value="1" data-img-src="">1-2 light scratches</option>
                  <option value="2" data-img-src="">3 or more scratches</option>
                  <option value="3" data-img-src="">Cracked or damaged</option>
                </select>
              </div>
              <div class="form-group">
                <label for="body">How is your device's <b>housing</b>?</label>
                <select class="form-control" id="body" name="body" required>
                  <option value="0">Flawless, no scratches or bends!</option>
                  <option value="1">1-2 light scratches</option>
                  <option value="2">3 or more scratches</option>
                  <option value="3">Bent or severely damaged</option>
                </select>
              </div>
              <div class="form-group">
                <label for="power">Is your device able to <b>power on</b>?</label>
                <select class="form-control" id="power" name="power" required>
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <!--Step 2 End-->

            <!--Step 3-->
            <fieldset>
              <h2 class="fs-title">Step 3</h2>
              <h3 class="fs-subtitle">Just a little more information needed, almost there!</h3>
              <div class="form-group">
                <label for="battery">Does your device have a faulty battery?</label>
                <select class="form-control" id="battery" name="battery" required>
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="charge">Is your device able to <b>charge</b>?</label>
                <select class="form-control" id="charge" name="charge" required>
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="calls">Is your device able to <b>make and receive calls</b>?</label>
                <select class="form-control" id="calls" name="calls">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="fcamera">Does your <b>front camera work</b>?</label>
                <select class="form-control" id="fcamera" name="fcamera">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="rcamera">Does your <b>rear camera work</b>?</label>
                <select class="form-control" id="rcamera" name="rcamera">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="water">Is your device <b>water damaged</b>?</label>
                <select class="form-control" id="water" name="water">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="wifi">Is your device able to connect using WiFi?</label>
                <select class="form-control" id="wifi" name="wifi">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              <input type="button" name="next" class="next action-button" value="Next" onclick="getFinalPrice();" />
            </fieldset>
            <!--End Step 3-->

            <!--Final-->
            <fieldset>
              <h2 class="fs-title">Value</h2>
              <h3 class="fs-subtitle">Here's how much we can offer for your device.</h3>
              <h2 id="finalValue"></h2>
              <hr>
              <h3 class="fs-subtitle">If you're happy with our offer, please fill in your contact details below and we'll arrange for free a pickup of your device.</h3>
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" placeholder="Full Name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="example@example.com" name="email" required>
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" placeholder="91234567" name="number" required>
                <small id="numberHelp" class="form-text text-muted">We'll never share your email and phone number with anyone else.</small>
              </div>
              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
            <!--Final End-->
          </form>
        </div>
      </div>
      <!-- /.MultiStep Form -->
    </body>

    </html>