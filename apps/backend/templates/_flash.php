
                    <!--  start message-green -->
               <?php if ($sf_user->hasFlash('notice')): ?>
                    <div id="message-green">
			<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                            <td class="green-left"><?php echo $sf_user->getFlash('notice') ?></td>
                            <td class="green-right"><a class="close-green"></a></td>
                            </tr>
                        </table>
                    </div>
               <?php endif; ?>
                    <!--  end message-green -->

               <?php if ($sf_user->hasFlash('error')): ?>
                    <!--  start message-red -->
                    <div id="message-red">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                            <td class="red-left"><?php echo $sf_user->getFlash('error') ?></td>
                            <td class="red-right"><a class="close-red"></a></td>
                            </tr>
			</table>
                    </div>
				<!--  end message-red -->
               <?php endif; ?>