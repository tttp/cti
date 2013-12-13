{literal}
<style>
</style>

<script>

cj(function($) {
  $(".crm-contact_phone").wrap(function(){
    var phone = $(this).text().replace(/\D+/, '');
    var url = "callto:"+phone;
    return "<a href='"+url+"'></a>";
  });
});
</script>
{/literal}
