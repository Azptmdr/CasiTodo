function Edit()
        {
            //ASIGNA LOS DATOS DE LA TABLA A VARIABLES PARA MANIPULAR -----------------------------------------------------------------------------------
            var table = document.getElementById("DataTable");
            var rows = table.getElementsByTagName("tr");
            for (i = 1; i < rows.length; i++) {
                row = table.rows[i];
                row.onclick = function () {
                    var dato1 = this.getElementsByTagName("td")[0].innerHTML;
                    document.getElementById("txt1").value = dato1;
                };   
            }
        }


