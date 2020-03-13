SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";

--
-- Database: `db_sistem`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif`
(
  `alternatif_id` int
(11) NOT NULL,
  `alternatif_nama` varchar
(30) NOT NULL,
  `kriteria_1` int
(11) NOT NULL,
  `kriteria_2` int
(11) NOT NULL,
  `kriteria_3` int
(11) NOT NULL,
  `kriteria_4` int
(11) NOT NULL,
  `id_user` int
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Struktur dari tabel `tbl_bobot`
--

CREATE TABLE `tbl_bobot`
(
  `id_bobot` int
(11) NOT NULL,
  `bobot_keriteria1` double NOT NULL,
  `bobot_keriteria2` double NOT NULL,
  `bobot_keriteria3` double NOT NULL,
  `bobot_keriteria4` double NOT NULL,
  `id_user` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Struktur dari tabel `tbl_user`
--
CREATE TABLE `tbl_user`
(
  `user_id` int
(11) NOT NULL,
  `user_name` varchar
(30) NOT NULL,
  `user_email` varchar
(60) NOT NULL,
  `user_password` varchar
(60) NOT NULL,
  `user_level` varchar
(5) NOT NULL,
  `status` int
(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeks untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
ADD PRIMARY KEY
(`alternatif_id`),
ADD KEY `id_user`
(`id_user`);

--
-- Indeks untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
ADD PRIMARY KEY
(`id_bobot`),
ADD KEY `id_user`
(`id_user`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
ADD PRIMARY KEY
(`user_id`);

--
-- AUTO_INCREMENT untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `alternatif_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_bobot` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- Ketidakleluasaan untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
ADD CONSTRAINT `tbl_alternatif_ibfk_1` FOREIGN KEY
(`id_user`) REFERENCES `tbl_user`
(`user_id`);

--
-- Ketidakleluasaan untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
ADD CONSTRAINT `tbl_bobot_ibfk_1` FOREIGN KEY
(`id_user`) REFERENCES `tbl_user`
(`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;