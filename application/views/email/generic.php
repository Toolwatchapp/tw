<div style="min-height:100%;margin:0;padding:0;width:100%;background-color:#fafafa"><div><div></div><div></div></div>
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-collapse:collapse;height:100%;margin:0;padding:0;width:100%;background-color:#fafafa">
                <tbody><tr>
                    <td align="center" valign="top" style="height:100%;margin:0;padding:10px;width:100%;border-top:0">


						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;border:0;max-width:600px!important">
							<tbody><tr>

							</tr>
							<tr>
								<td valign="top" style="background-color:#ffffff;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:0"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
    <tbody>
            <tr>
                <td valign="top" style="padding:9px">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" style="min-width:100%;border-collapse:collapse">
                        <tbody><tr>
                            <td valign="top" style="padding-right:9px;padding-left:9px;padding-top:0;padding-bottom:0;text-align:center">


                                        <img align="center" alt="" src="https://ci4.googleusercontent.com/proxy/srY9kf4hbuJZarL1CyvPfko_ww4nOwpdd4-PBHi2glhEoYjlbYn8UBtbjMrhzu_FClQi9UIoBoropwGFw_3F5tC6B_dR6T1QYbBt3kXRq7aKSiVA4XnDiUmr2yZw6raWBddddq7WPpuJmrNXOS5Aqswd6rOp8xjuQVnKGKY=s0-d-e1-ft#https://gallery.mailchimp.com/cf4ccc68cacf65d9d1ed31049/images/af64534f-b825-4b9e-a4b2-4a8a97860f0b.png" width="250" style="max-width:250px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;min-height:auto;outline:none;text-decoration:none" class="CToWUd">


                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
							</tr>
							<tr>
								<td valign="top" style="background-color:#ffffff;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:0"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
    <tbody>
        <tr>
            <td valign="top">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
                    <tbody><tr>

                        <td valign="top" style="padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#202020;font-family:Helvetica;font-size:16px;line-height:150%;text-align:left">

                            <h1 style="display:block;margin:0;padding:0;color:#202020;font-family:Helvetica;font-size:26px;font-style:normal;font-weight:bold;line-height:125%;letter-spacing:normal;text-align:left"><?php echo $title;?></h1>
&nbsp;

<p style="text-align:justify;margin:10px 0;padding:0;color:#202020;font-family:Helvetica;font-size:16px;line-height:150%"><?php echo $content;?></p>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
							</tr>
							<tr>
								<td valign="top" style="background-color:#ffffff;border-top:0;border-bottom:2px solid #eaeaea;padding-top:0;padding-bottom:9px">

									<table align="left" border="0" cellpadding="0" cellspacing="0" width="300" style="border-collapse:collapse">
										<tbody><tr>
											<td valign="top"></td>
										</tr>
									</tbody></table>

									<table align="left" border="0" cellpadding="0" cellspacing="0" width="300" style="border-collapse:collapse">
										<tbody><tr>
											<td valign="top"></td>
										</tr>
									</tbody></table>

								</td>
							</tr>
							<tr>
								<td valign="top" style="background-color:#fafafa;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:9px"><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">

<?php if(isset($summary) && is_array($summary)) { ?>
	<tbody>
        <tr>
            <td valign="top">


                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
                    <tbody><tr>

                        <td style="padding-top:9px;padding-left:18px;padding-bottom:9px;padding-right:18px">

                            <table border="0" cellpadding="18" cellspacing="0" width="100%" style="min-width:100%!important;background-color:#eeeeee;border-collapse:collapse">
                                <tbody><tr>
                                    <td valign="top" style="color:#000000;font-family:Helvetica;font-size:14px;font-weight:normal;text-align:left;word-break:break-word;line-height:150%">
                                        <div style="text-align:center">Quick view of your Toolwatch <a href="https://toolwatch.io/measures/?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" title="Toolwath dashboard" style="color:#656565;font-weight:normal;text-decoration:underline" target="_blank">dashboard</a> :</div>

<ul><?php foreach ($summary as $watch) { $watch = (object) $watch; ?>
    <li><span style="color:#000000;font-family:monospace;font-size:medium;line-height:normal;white-space:pre-wrap"><img goomoji="231a" data-goomoji="231a" style="margin:0 0.2ex;vertical-align:middle;max-height:24px" alt="⌚" src="https://mail.google.com/mail/e/231a" class="CToWUd"><?php if($watch->statusId === 1.5){
        echo ' ' . $watch->brand.' '.$watch->name.': Check accuracy in '.$watch->accuracy.' hours.';
      }else if($watch->statusId == 1){
        echo ' ' . $watch->brand .' '.$watch->name .': <a href="'.base_url().'/measures">Check accuracy now</a>.';
      }else if($watch->statusId == null){
        echo ' ' . $watch->brand .' '.$watch->name .': <a href="'.base_url().'/measures">Measure now</a>.';
      }else{
        echo ' ' . $watch->brand .' '.$watch->name .': Runs at ' . $watch->accuracy . ' spd (' . (($watch->accuracyAge == 0) ? 'today).' : $watch->accuracyAge  . ' day(s) ago).');
      }?></span></li>
  <?php } ?>
	</ul>
Have you tested your watch recently? Measure it <a href="https://toolwatch.io?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" title="Toolwatch.io" style="color:#656565;font-weight:normal;text-decoration:underline" target="_blank">NO</a><a href="https://Toolwatch.io?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" title="Toolwatch.io" style="color:#656565;font-weight:normal;text-decoration:underline" target="_blank">W</a>!
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>



            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse;table-layout:fixed!important">
    <tbody>
        <tr>
            <td style="min-width:100%;padding:9px 18px">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-top-width:2px;border-top-style:solid;border-top-color:#eaeaea;border-collapse:collapse">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table>
<?php } ?><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
    <tbody>
        <tr>
            <td valign="top">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse:collapse">
                    <tbody><tr>

                        <td valign="top" style="padding:9px 18px;text-align:center;word-break:break-word;color:#656565;font-family:Helvetica;font-size:12px;line-height:150%">

                            <span style="font-size:15px">Enjoying Toolwatch ?</span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
    <tbody>
        <tr>
            <td style="padding-top:0;padding-right:18px;padding-bottom:18px;padding-left:18px" valign="top" align="center">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate!important;border-radius:3px;background-color:#62be7f">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" style="font-family:Arial;font-size:18px;padding:15px">
                                <a title="Spread the word" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ftoolwatch.io&amp;via=toolwatchapp&amp;text=Easily%20measure%20and%20track%20the%20accuracy%20of%20your%20mechanical%20watches&amp;hashtags=WatchLover&amp;utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" style="font-weight:bold;letter-spacing:normal;line-height:100%;text-align:center;text-decoration:none;color:#ffffff;display:block" target="_blank">Spread the word</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
    <tbody>
        <tr>
            <td align="center" valign="top" style="padding:9px">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px;padding-right:9px;padding-left:9px">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							<tbody><tr>
								<td valign="top">



			                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
			                                    <tbody><tr>
			                                        <td valign="top" style="padding-right:10px;padding-bottom:9px">
			                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
			                                                <tbody><tr>
			                                                    <td align="left" valign="middle" style="padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:9px">
			                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse:collapse">
			                                                            <tbody><tr>

			                                                                    <td align="center" valign="middle" width="24">
			                                                                        <a href="http://instagram.com/toolwatchapp?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" target="_blank"><img src="https://ci4.googleusercontent.com/proxy/Fvv9XNVG5TOE464aRkUJHG6oAZMgXKbcuyNH5ImvuKnkBf-5aNxuBxrfZNgecK2Dgng9mgEuA1AwCgj0StreFJvWRaU3L8-gEnskyMrf7t5oP8zZS6T-mwAIaKu8c_1zoA=s0-d-e1-ft#http://cdn-images.mailchimp.com/icons/social-block-v2/dark-instagram-48.png" style="display:block;border:0;min-height:auto;outline:none;text-decoration:none" height="24" width="24" class="CToWUd"></a>
			                                                                    </td>


			                                                                    <td align="left" valign="middle" style="padding-left:5px">
			                                                                        <a href="http://instagram.com/toolwatchapp?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" style="font-family:Helvetica;font-size:12px;text-decoration:none;color:#656565" target="_blank">Instagram</a>
			                                                                    </td>

			                                                            </tr>
			                                                        </tbody></table>
			                                                    </td>
			                                                </tr>
			                                            </tbody></table>
			                                        </td>
			                                    </tr>
			                                </tbody></table>




			                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
			                                    <tbody><tr>
			                                        <td valign="top" style="padding-right:10px;padding-bottom:9px">
			                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
			                                                <tbody><tr>
			                                                    <td align="left" valign="middle" style="padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:9px">
			                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse:collapse">
			                                                            <tbody><tr>

			                                                                    <td align="center" valign="middle" width="24">
			                                                                        <a href="http://www.facebook.com/toolwatch?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" target="_blank"><img src="https://ci3.googleusercontent.com/proxy/k_vUkAuXsi-buNpBKru91u46KOLmH4NYCm_CGwGFZqgVz5ebgZ_nqf_aM_1SfhUqDvYMpsJU0HEw4K479DL4kWII-Aq3IPk_dSTeL2C9vIeifSfv2MLL0eV6WKfe40T1=s0-d-e1-ft#http://cdn-images.mailchimp.com/icons/social-block-v2/dark-facebook-48.png" style="display:block;border:0;min-height:auto;outline:none;text-decoration:none" height="24" width="24" class="CToWUd"></a>
			                                                                    </td>


			                                                                    <td align="left" valign="middle" style="padding-left:5px">
			                                                                        <a href="http://www.facebook.com/toolwatch?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" style="font-family:Helvetica;font-size:12px;text-decoration:none;color:#656565" target="_blank">Facebook</a>
			                                                                    </td>

			                                                            </tr>
			                                                        </tbody></table>
			                                                    </td>
			                                                </tr>
			                                            </tbody></table>
			                                        </td>
			                                    </tr>
			                                </tbody></table>




			                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
			                                    <tbody><tr>
			                                        <td valign="top" style="padding-right:10px;padding-bottom:9px">
			                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
			                                                <tbody><tr>
			                                                    <td align="left" valign="middle" style="padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:9px">
			                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse:collapse">
			                                                            <tbody><tr>

			                                                                    <td align="center" valign="middle" width="24">
			                                                                        <a href="http://www.twitter.com/toolwatchapp?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" target="_blank"><img src="https://ci4.googleusercontent.com/proxy/aGDvD3h1y94u-huL0MVX06xcrell4QKFBkFNOrJF1lucoKp7_OJ7D60hLrFfSJ5EXKlcTvEu7P6FOJVvtAey3j1uFVW7bxYx8eQqJc-IAA1D2YBkW9mBd2mQgSdSogA=s0-d-e1-ft#http://cdn-images.mailchimp.com/icons/social-block-v2/dark-twitter-48.png" style="display:block;border:0;min-height:auto;outline:none;text-decoration:none" height="24" width="24" class="CToWUd"></a>
			                                                                    </td>


			                                                                    <td align="left" valign="middle" style="padding-left:5px">
			                                                                        <a href="http://www.twitter.com/toolwatchapp?utm_source=Toolwatch+blog&amp;utm_campaign=e1c9cc363f-Toolwatch_Test&amp;utm_medium=email&amp;utm_term=0_73aaa65a62-e1c9cc363f-" style="font-family:Helvetica;font-size:12px;text-decoration:none;color:#656565" target="_blank">Twitter</a>
			                                                                    </td>

			                                                            </tr>
			                                                        </tbody></table>
			                                                    </td>
			                                                </tr>
			                                            </tbody></table>
			                                        </td>
			                                    </tr>
			                                </tbody></table>




			                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
			                                    <tbody><tr>
			                                        <td valign="top" style="padding-right:0;padding-bottom:9px">
			                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
			                                                <tbody><tr>
			                                                    <td align="left" valign="middle" style="padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:9px">
			                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse:collapse">
			                                                            <tbody><tr>

			                                                                    <td align="center" valign="middle" width="24">
			                                                                        <a href="mailto:hello@toolwatch.io" target="_blank"><img src="https://ci6.googleusercontent.com/proxy/y7sIYlXU-FF47D4txABGiwCucMJ1NmjbsSX8kJfMUftkUV-sbM8OAKzIlcwVAWTsEMO-MiZ2mq-9fLdS0uOYL-G9GJnxnaeG7q6zHV_CqI2BJUxGFKsibg4R68abPO-HqCzzEdpszw=s0-d-e1-ft#http://cdn-images.mailchimp.com/icons/social-block-v2/dark-forwardtofriend-48.png" style="display:block;border:0;min-height:auto;outline:none;text-decoration:none" height="24" width="24" class="CToWUd"></a>
			                                                                    </td>


			                                                                    <td align="left" valign="middle" style="padding-left:5px">
			                                                                        <a href="mailto:hello@toolwatch.io" style="font-family:Helvetica;font-size:12px;text-decoration:none;color:#656565" target="_blank">Email</a>
			                                                                    </td>

			                                                            </tr>
			                                                        </tbody></table>
			                                                    </td>
			                                                </tr>
			                                            </tbody></table>
			                                        </td>
			                                    </tr>
			                                </tbody></table>


								</td>
							</tr>
						</tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
    <tbody>
        <tr>
            <td valign="top">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-collapse:collapse">
                    <tbody><tr>

                        <td valign="top" style="padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#656565;font-family:Helvetica;font-size:12px;line-height:150%;text-align:center">

                            <span style="background-color:#fafafa;color:#656565;font-family:helvetica;font-size:12px;line-height:18px">P.S. The whole team is always around, almost 24/7, to reply to your emails. In fact, you can just hit reply to this email or any others you receive from us. Whether you need help, have ideas or just want to say "hello," we'll get back to you within a few hours.
                            <?php if(isset($alphaId)) { ?>
                              <br/>
                              You can manage your email preferences <a href="<?php echo base_url() . 'Unsubscribe/' . $alphaId;?>">here.</a>
                            <?php } ?>
                            </span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
    <tbody>
        <tr>
            <td valign="top">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse:collapse">
                    <tbody>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
							</tr>
						</tbody></table>


                    </td>
                </tr>
            </tbody></table>
        </center><div class="yj6qo"></div><div class="adL">
    </div></div>
