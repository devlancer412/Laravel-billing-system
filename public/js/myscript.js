$('#edit').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget)
  var name = button.data('myname')
  var capacity = button.data('mycapacity')
  var status = button.data('mystatus')
  var tab_id = button.data('table_id')
  var modal = $(this)
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #capacity').val(capacity);
  modal.find('.modal-body #status').val(status);
  modal.find('.modal-body #tab_id').val(tab_id);
});
$('#delete').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget)
  var tab_id = button.data('table_id')
  var modal = $(this)
  modal.find('.modal-body #table_id').val(tab_id);
});
$('#editCategory').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget)
  var name = button.data('myname')
  var par_id = button.data('myparentid')
  var status = button.data('mystatus')
  var cat_id = button.data('category_id')
  var modal = $(this)
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #par_id').val(par_id);
  modal.find('.modal-body #status').val(status);
  modal.find('.modal-body #cat_id').val(cat_id);
});
$('#deleteCategory').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget)
  var cat_id = button.data('category_id')
  var modal = $(this)
  modal.find('.modal-body #category_id').val(cat_id);
});