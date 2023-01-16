class Titan {
  int? _powerPoint;

  void set powerPoint(int powerPoint) {
    if (powerPoint < 0) {
      _powerPoint = 0;
    } else {
      _powerPoint = powerPoint;
    }
  }

  int get powerPoint => _powerPoint!;
}
