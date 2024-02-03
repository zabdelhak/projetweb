// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    lengthMenu:
    [[1,3,5,10,-1],
    [1,3,5,10,'ALL']]
  });
});