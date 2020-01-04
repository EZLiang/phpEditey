function redirect(address) {
  $("head").append($("<meta http-equiv=\"refresh\" content=\"2; url=" + address + "\" />"));
}