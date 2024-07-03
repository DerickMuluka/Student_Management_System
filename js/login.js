//do everything only when the document is loaded
$(function(e) 
{
    //capture the keyup event
    $(document).on("keyup","input",function(e){
        let un=$("#txtUsername").val();
        let pw=$("#txtPassword").val();
        if(un.trim() !== "" && pw.trim() !== "")
        {
            $("#btnLogin").removeClass("inactivecolor");
            $("#btnLogin").addClass("activecolor");
        }
        else
        {
            $("#btnLogin").removeClass("activecolor");
            $("#btnLogin").addClass("inactivecolor");
        }
    });
});