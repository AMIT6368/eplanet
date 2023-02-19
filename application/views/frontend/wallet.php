<section class="balance">
    <div class="setting">
        Setting
    </div>
    <div class="balance_home">

        <div class="total_balance">
            Balance <span class="main_balance">₹ <?php  echo $userdata->wallet_amount ?></span>
        </div>

        <div class="balance_option_back">
            <div class="balance_option">
                <div class="option">
                    <img src="<?php echo base_url();  ?>assets/frontend/all_in_all/assets/pay.png" alt="">
                    <div class="option_title">Pay</div>
                </div>
                <div class="option">
                    <img src="<?php echo base_url();  ?>assets/frontend/all_in_all/assets/withdrawal.png" alt="">
                    <div class="option_title">Withdrawal</div>
                </div>
                <div class="option">
                    <img src="<?php echo base_url();  ?>assets/frontend/all_in_all/assets/AddMoney.png" alt="">
                    <div class="option_title addmoney_title">Add Money</div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="passbook">
        <img src="<?php echo base_url();  ?>assets/frontend/all_in_all/assets/Passbook.png" alt="">
        Passbook
    </div>

    <div class="entries"> + 10,000 ₹ </div>
</section>