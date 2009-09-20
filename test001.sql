--
-- Tabellenstruktur für Tabelle `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  `text` varchar(1024) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


--
-- Daten für Tabelle `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `text`) VALUES
(1, 'Peter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in sapien mi, ut interdum augue. Duis molestie cursus mauris, sed ornare lectus adipiscing nec.'),
(2, 'Uwe', 'Sed adipiscing semper odio sit amet pellentesque. Nulla sagittis varius ullamcorper. Aenean ultrices vulputate mollis.'),
(3, 'Manni', 'Phasellus bibendum mi mattis diam tincidunt ac porttitor ante ullamcorper. Ut condimentum, metus sit amet cursus vehicula, lorem arcu rhoncus lacus, id pretium metus tellus at nunc.'),
(4, 'Günter', 'Etiam vitae interdum leo. Ut blandit consectetur tincidunt. Vivamus iaculis malesuada rutrum. Integer vel magna ligula.');
