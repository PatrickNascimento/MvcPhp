USE [__DEV_TEST_1]
GO

/****** Object:  Table [ENGEPLUSTELECOM\patrick.nascimento].[Vendas]    Script Date: 18/11/2020 07:51:58 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [ENGEPLUSTELECOM\patrick.nascimento].[Vendas](
	[id_vendas] [int] IDENTITY(1,1) NOT NULL,
	[id_produto] [int] NULL,
	[id_vendedor] [int] NULL,
	[Data_venda] [datetime] NULL,
	[valor_venda] [decimal](18, 0) NULL,
	[comissao] [decimal](18, 0) NULL,
	[forma_pagamento] [nvarchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_vendas] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [ENGEPLUSTELECOM\patrick.nascimento].[Vendas]  WITH CHECK ADD  CONSTRAINT [FK_Vendas_produto] FOREIGN KEY([id_produto])
REFERENCES [ENGEPLUSTELECOM\patrick.nascimento].[produto] ([id_produto])
ON UPDATE CASCADE
ON DELETE CASCADE
GO

ALTER TABLE [ENGEPLUSTELECOM\patrick.nascimento].[Vendas] CHECK CONSTRAINT [FK_Vendas_produto]
GO

ALTER TABLE [ENGEPLUSTELECOM\patrick.nascimento].[Vendas]  WITH CHECK ADD  CONSTRAINT [FK_Vendas_vendedor] FOREIGN KEY([id_vendedor])
REFERENCES [ENGEPLUSTELECOM\patrick.nascimento].[vendedor] ([id_vendedor])
ON UPDATE CASCADE
ON DELETE CASCADE
GO

ALTER TABLE [ENGEPLUSTELECOM\patrick.nascimento].[Vendas] CHECK CONSTRAINT [FK_Vendas_vendedor]
GO

