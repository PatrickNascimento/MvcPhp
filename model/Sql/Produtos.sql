USE [__DEV_TEST_1]
GO

/****** Object:  Table [ENGEPLUSTELECOM\patrick.nascimento].[produto]    Script Date: 13/11/2020 13:55:30 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [ENGEPLUSTELECOM\patrick.nascimento].[produto](
	[id_produto] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](40) NULL,
	[valor] [numeric](16, 2) NULL,
	[data] [datetime] NULL,
	[quantidade] [int] NULL,
	[comissao] [decimal](18, 0) NULL,
 CONSTRAINT [PK__produto__BA38A6B83D99D36D] PRIMARY KEY CLUSTERED 
(
	[id_produto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

