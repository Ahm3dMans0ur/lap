@foreach ($fields as $field)
  @includeIf("products.fields.{$field['type']}", ['field' => $field])
@endforeach

