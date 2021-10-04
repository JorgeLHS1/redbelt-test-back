var incidents;
    $(function () {
      let endpoint = "";
      $.ajax({
        url: endpoint + "/api/incidents",
        contentType: "application/json",
        dataType: "json",
        success: function (values) {
          incidents = values;
          $.each(values, function (i, value) {
            var status = (value.status == true) ? "Ativo" : "Desativado";
            var criticality = (value.criticality == 'low') ? 'Baixa' : (value.criticality == 'medium') ? "Média" : "Alta";
            var type = (value.type == 'alarm') ? 'Alarme' : (value.type == 'incident') ? "Incidente" : "Outros";
            $("#incidents-table tbody").append(
              "<tr>" +
                "<td>" + value.id + "</td>" +
                "<td>" + value.title + "</td>" +
                "<td>" + value.description + "</td>" +
                "<td>" + criticality + "</td>" +
                "<td>" + type + "</td>" +
                "<td>" + status + "</td>" +
                "<td>" +
                "<a class='button-edit' href='#' value='" + value.id + "'>Editar</a></br>" +
                "<a class='button-delete' href='#' value='" + value.id + "'>Deletar</a></br>" +
                "</td>" +
              "</tr>"
            );
          });
        },
      });

      $("select").formSelect();

      $("#incident-form").submit(function(e) {
        var $form = $(this);
        var $buttonVal = $(":button").val();
        e.preventDefault();
        if($buttonVal == "create"){
          $.ajax({
            type: "POST",
            url: endpoint + "/api/incidents",
            data: $(this).serialize()+ "&status=" + $('#status').prop('checked'),
            success: function(result) {
              console.log(result);
              $('#incident-form').each (function(){
                this.reset();
              });
            },
            error: function(result) {
              alert("Erro, confira as informações preenchidas.");
              console.log(result);
            }
          });
        } else if($buttonVal == "edit") {
          $.ajax({
            type: "PUT",
            url: endpoint + "/api/incidents/" + $("#id").val(),
            data: $(this).serialize()+ "&status=" + $('#status').prop('checked'),
            success: function(result) {
              console.log(result);
              $('#incident-form').each (function(){
                this.reset();
              });
            },
            error: function(result) {
              alert("Erro, confira as informações preenchidas.");
              console.log(result);
            }
          });
        } else{
          $.ajax({
            type: "DELETE",
            url: endpoint + "/api/incidents/" + $("#id").val(),
            success: function(result) {
              console.log(result);
              $('#incident-form').each (function(){
                this.reset();
              });
            },
            error: function(result) {
              alert("Erro, confira as informações preenchidas.");
              console.log(result);
            }
          });
        }
      });

      $("#incidents-table").on("click", ".button-edit", function(e){
        e.preventDefault();
        id = $(this).attr('value');
        var incident;
        $(incidents).each(function(i, value){
          if(value.id == id) incident = value;
        });
        $("#id").attr("value", id);
        $("#form-title").text("Editar Incidente");
        $(":button").val("edit");
        $(":button").text("Editar");
        $(":button").append("<i class='material-icons right'>edit</i>");
        $("#title").val(incident.title);
        $("#description").val(incident.description);
        $("#description").focus();
        $("#criticality").val(incident.criticality).change();
        $("#type").val(incident.type).change();
        $("#status").prop('checked', incident.status);
        $(":button").focus();
      });

      $("#incidents-table").on("click", ".button-delete", function(e){
        e.preventDefault();
        id = $(this).attr('value');
        var incident;
        $(incidents).each(function(i, value){
          if(value.id == id) incident = value;
        });
        $("#id").attr("value", id);
        $("#form-title").text("Deletar Incidente");
        $(":button").val("delete");
        $(":button").text("Deletar").focus();
        $(":button").append("<i class='material-icons right'>delete</i>");
        $("#title").val(incident.title);
        $("#description").focus();
        $("#description").val(incident.description);
        $("#criticality").val(incident.criticality).change();
        $("#type").val(incident.type).change();
        $("#status").prop('checked', incident.status);
        $(":button").focus();
        });

    });
