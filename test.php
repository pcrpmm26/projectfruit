<form name="formadd">
    
<script>
                                function addOne() {
                                    document.formadd.num.value++;
                                    return;
                                }

                                function delOne() {
                                    var num =document.formadd.num.value;
                                    if(num > 1){
                                        document.formadd.num.value--;
                                        return;
                                    }
                                }
                                </script>
                                <label class="col-xs-12">
                                    <h3>จำนวน :</h3>
                                </label>
                                <input type="button" class="buttonn  btn btn-danger col-xs-2" value="-"
                                    onclick="delOne()">
                                <div class="col-xs-6"><input name="num" class="addnum form-control col-xs-8 " readonly
                                        value="1"></input></div>
                                <input type="button" class="buttonn btn btn-success col-xs-2" value="+"
                                    onclick="addOne()">
</form>