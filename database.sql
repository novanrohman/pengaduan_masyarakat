CREATE TABLE 'masyarakat'(
    'nik' char (16) NOT NULL PRIMARY KEY,
    'nama' varchar (35) NOT NULL,
    'username' varchar (25) NOT NULL UNIQUE,
    'password' varchar (255) NOT NULL
);