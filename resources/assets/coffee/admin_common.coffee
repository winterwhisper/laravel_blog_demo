$("[data-confirm]").click ->
  if confirm($(this).data('confirm'))
    return true
  else
    this.stopPropagation();

$("[data-method='delete']").click ->
  $(this).parents("form").submit()
