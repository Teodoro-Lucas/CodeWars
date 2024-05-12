function descendingOrder(int $n): int {
  $numero_str = (string) $n;
  $digitos = str_split($numero_str);
  rsort($digitos);
  return intval(implode("", $digitos));
}