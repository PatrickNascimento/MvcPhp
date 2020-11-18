USE [__DEV_TEST_1]
GO

/****** Object:  Table [ENGEPLUSTELECOM\patrick.nascimento].[vendedor]    Script Date: 18/11/2020 07:52:21 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [ENGEPLUSTELECOM\patrick.nascimento].[vendedor](
	[id_vendedor] [int] IDENTITY(1,1) NOT NULL,
	[comissao] [int] NULL,
	[nome] [varchar](50) NULL,
	[ativo] [tinyint] NULL,
 CONSTRAINT [PK_vendedor_id_vendedor] PRIMARY KEY CLUSTERED 
(
	[id_vendedor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [ENGEPLUSTELECOM\patrick.nascimento].[vendedor] ADD  CONSTRAINT [DF_vendedor_ativo]  DEFAULT ((1)) FOR [ativo]
GO

