var editor = new $.fn.dataTable.Editor({
    ajax:  '/gui/routes',
    table: '#example',
    fields: [
        { label: 'First name', name: 'first_name' },
        { label: 'Last name',  name: 'last_name'  },
        // etc
    ]
});

myTable = $('#example').DataTable({
    dom:"<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    select: true,
    buttons: [
        {extend: 'copy'},
        {extend: 'excel'},
        {extend: 'pdf'},
        { extend: 'create', editor: editor },
        { extend: 'edit',   editor: editor },
        { extend: 'remove', editor: editor }
    ],
    ajax:  '/gui/routes',
    select: true,
    autofill: true,
    colReorder: true,
    fixedColumns: true,
    fixedHeader: true
});

hljs.initHighlightingOnLoad();

var tree = [
  {
    text: "Parent 1",
    icon: "fa fa-play",
    nodes: [
      {
        text: "Child 1",
        nodes: [
          {
            text: "Grandchild 1"
          },
          {
            text: "Grandchild 2"
          }
        ]
      },
      {
        text: "Child 2"
      }
    ]
  },
  {
    text: "Parent 2"
  },
  {
    text: "Parent 3"
  },
  {
    text: "Parent 4"
  },
  {
    text: "Parent 5"
  }
];

$('#views-tree').treeview({data: tree});
