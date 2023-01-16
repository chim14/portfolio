class Employee {
  int id;
  String name;
  String department;

  Employee(this.id, this.name, this.department);

  @override
  String toString() {
    return 'Employee (id: $id, name: "$name", department: "$department")';
  }
}
