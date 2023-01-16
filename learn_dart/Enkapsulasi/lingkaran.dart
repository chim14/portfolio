class Lingkaran {
  double? _jariJari;

  void set jariJari(double jariJari) {
    if (jariJari < 0) {
      _jariJari = -1 * jariJari;
    } else {
      _jariJari = jariJari;
    }
  }

  double get jariJari => _jariJari!;

  double hitungLuas() {
    return 3.14 * _jariJari! * _jariJari!;
  }
}
