{literal}
<style>
</style>

<script>

cj(function($) {
  $(".crm-contact_phone").wrap(function(){
    var phone = $(this).text().replace(/ /g, '').replace("+",'00');
//    var url = "callto:"+phone;
    var url = "http://192.168.18.1/civiCRM/click2dial.php?to=0"+phone;
    return "<a href='"+url+"'></a>";
  });
});
</script>
{/literal}
