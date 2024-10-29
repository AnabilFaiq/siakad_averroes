CREATE TABLE `user` (
  `id` int PRIMARY KEY,
  `nama` varchar(255),
  `username` varchar(255) UNIQUE,
  `password` varchar(255),
  `role_id` int
);

CREATE TABLE `role` (
  `id` int PRIMARY KEY,
  `nama` varchar(255)
);

CREATE TABLE `kelas` (
  `id` int PRIMARY KEY,
  `nama` varchar(255),
  `kode_kelas` varchar(255) UNIQUE,
  `wali_kelas` int
);

CREATE TABLE `mapel` (
  `id` int PRIMARY KEY,
  `nama` varchar(255),
  `pengajar` int
);

CREATE TABLE `jadwal` (
  `id` int PRIMARY KEY,
  `kelas_id` int,
  `mapel_id` int,
  `pengajar_id` int,
  `hari` ENUM('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'),
  `jam_mulai` TIME,
  `jam_selesai` TIME
);


CREATE TABLE `tugas` (
  `id` int PRIMARY KEY,
  `mapel_id` INT,
  `deskripsi` text,
  `deadline` datetime,
  `materi` varchar(255)
);

CREATE TABLE `pengumpulan` (
  `id` int PRIMARY KEY,
  `user_id` int,
  `tugas_id` int,
  `catatan` varchar(255),
  `file` varchar(255),
  `status` ENUM('Terkirim','Belum Terkirim')
);

CREATE TABLE `kelas_siswa` (
  `id` int PRIMARY KEY,
  `user_id` int,
  `kelas_id` int
);

CREATE TABLE `absensi` (
  `id` int PRIMARY KEY,
  `jadwal_id` int,
  `user_id` int,
  `status` ENUM('Hadir', 'Sakit', 'Izin', 'Alpa'),
  `tanggal_absen` date
);

CREATE TABLE `jurnal` (
  `id` int PRIMARY KEY,
  `mapel_id` int,
  `user_id` int,
  `judul_jurnal` varchar(255),
  `isi` text,
  `status` ENUM('Disetujui', 'Menunggu', 'Ditolak'),
  `tgl` datetime
);

CREATE TABLE `nilai` (
  `id` int PRIMARY KEY,
  `pengumpulan_id` int,
  `nilai` int,
  `jenis_nilai` ENUM('Tugas', 'UTS', 'UAS'),
  `catatan` varchar(255)
);


CREATE TABLE `rapor` (
  `id` int PRIMARY KEY,
  `user_id` int,
  `kelas_id` int,
  `semester` int,
  `tahun_ajaran` varchar(255),
  `rata_rata_nilai` decimal(5,2)
);

CREATE TABLE `rapor_detail` (
  `id` int PRIMARY KEY,
  `rapor_id` int,
  `mapel_id` int,
  `nilai_akhir` decimal(5,2),
  `keterangan` varchar(255)
);

ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

ALTER TABLE `kelas` ADD FOREIGN KEY (`wali_kelas`) REFERENCES `user` (`id`);

ALTER TABLE `mapel` ADD FOREIGN KEY (`pengajar`) REFERENCES `user` (`id`);

ALTER TABLE `jadwal` ADD FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

ALTER TABLE `jadwal` ADD FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);

ALTER TABLE `jadwal` ADD FOREIGN KEY (`pengajar_id`) REFERENCES `user` (`id`);

ALTER TABLE `tugas` ADD FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);

ALTER TABLE `pengumpulan` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `pengumpulan` ADD FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`);

ALTER TABLE `kelas_siswa` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `kelas_siswa` ADD FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

ALTER TABLE `absensi` ADD FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`);

ALTER TABLE `absensi` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `jurnal` ADD FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);

ALTER TABLE `jurnal` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `nilai` ADD FOREIGN KEY (`pengumpulan_id`) REFERENCES `pengumpulan` (`id`);

ALTER TABLE `rapor` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `rapor` ADD FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

ALTER TABLE `rapor_detail` ADD FOREIGN KEY (`rapor_id`) REFERENCES `rapor` (`id`);

ALTER TABLE `rapor_detail` ADD FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);
