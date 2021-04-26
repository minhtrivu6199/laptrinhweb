/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     24/04/2021 2:56:02 CH                        */
/*==============================================================*/


drop table if exists CHI_TIET_HOA_DON;

drop table if exists CHI_TIET_NHAP;

drop table if exists CHI_TIET_SAN_PHAM;

drop table if exists HINH_ANH;

drop table if exists HOA_DON;

drop table if exists NGUOI_DUNG;

drop table if exists SAN_PHAM;

drop table if exists THUONG_HIEU;

/*==============================================================*/
/* Table: CHI_TIET_HOA_DON                                      */
/*==============================================================*/
create table CHI_TIET_HOA_DON
(
   HD_ID                bigint not null AUTO_INCREMENT,
   SP_ID                bigint not null,
   CTHD_SO_LUONG        int,
   CTHD_GIA             float(13,2),
   primary key (HD_ID, SP_ID)
);

/*==============================================================*/
/* Table: CHI_TIET_NHAP                                         */
/*==============================================================*/
create table CHI_TIET_NHAP
(
   ND_ID                bigint not null AUTO_INCREMENT,
   SP_ID                bigint not null,
   CTN_SO_LUONG         int,
   CTN_GIA              float(13,2),
   CTN_THOI_GIAN_NHAP   datetime,
   primary key (ND_ID, SP_ID)
);

/*==============================================================*/
/* Table: CHI_TIET_SAN_PHAM                                     */
/*==============================================================*/
create table CHI_TIET_SAN_PHAM
(
   CTSP_ID              bigint not null,
   CTSP_KEY             varchar(256),
   CTSP_VALUE           varchar(256),
   primary key (CTSP_ID)
);

/*==============================================================*/
/* Table: HINH_ANH                                              */
/*==============================================================*/
create table HINH_ANH
(
   HA_ID                bigint not null AUTO_INCREMENT,
   SP_ID                bigint not null,
   HA_LINK              varchar(256) not null,
   HA_TEN               varchar(256),
   primary key (HA_ID)
);

/*==============================================================*/
/* Table: HOA_DON                                               */
/*==============================================================*/
create table HOA_DON
(
   HD_ID                bigint not null AUTO_INCREMENT,
   ND_ID                bigint not null,
   HD_THOI_GIAN_MO      datetime,
   HD_THOI_GIAN_DONG    datetime,
   HD_TRANG_THAI        varchar(256),
   HD_TONG_TIEN         float(13,2),
   HD_DIA_CHI           varchar(256),
   primary key (HD_ID)
);

/*==============================================================*/
/* Table: NGUOI_DUNG                                            */
/*==============================================================*/
create table NGUOI_DUNG
(
   ND_ID                bigint not null AUTO_INCREMENT,
   ND_EMAIL             varchar(256) not null,
   ND_HO_TEN            varchar(256) not null,
   ND_NGAY_SINH         date,
   ND_PASSWORD          varchar(256) not null,
   ND_VAI_TRO           varchar(256),
   primary key (ND_ID)
);

/*==============================================================*/
/* Table: SAN_PHAM                                              */
/*==============================================================*/
create table SAN_PHAM
(
   SP_ID                bigint not null AUTO_INCREMENT,
   CTSP_ID              bigint not null,
   TH_ID                bigint not null,
   SP_TEN               varchar(256) not null,
   SP_GIA               float(13,2),
   SP_TRANG_THAI        varchar(256),
   SP_MO_TA             text,
   SP_SIZE              varchar(5),
   primary key (SP_ID)
);

/*==============================================================*/
/* Table: THUONG_HIEU                                           */
/*==============================================================*/
create table THUONG_HIEU
(
   TH_ID                bigint not null,
   TH_TEN               varchar(256) not null,
   TH_CODE              varchar(256),
   primary key (TH_ID)
);

alter table CHI_TIET_HOA_DON add constraint FK_RELATIONSHIP_5 foreign key (HD_ID)
      references HOA_DON (HD_ID) on delete restrict on update restrict;

alter table CHI_TIET_HOA_DON add constraint FK_RELATIONSHIP_6 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table CHI_TIET_NHAP add constraint FK_RELATIONSHIP_7 foreign key (ND_ID)
      references NGUOI_DUNG (ND_ID) on delete restrict on update restrict;

alter table CHI_TIET_NHAP add constraint FK_RELATIONSHIP_8 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table HINH_ANH add constraint FK_RELATIONSHIP_3 foreign key (SP_ID)
      references SAN_PHAM (SP_ID) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_RELATIONSHIP_4 foreign key (ND_ID)
      references NGUOI_DUNG (ND_ID) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_RELATIONSHIP_1 foreign key (TH_ID)
      references THUONG_HIEU (TH_ID) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_RELATIONSHIP_2 foreign key (CTSP_ID)
      references CHI_TIET_SAN_PHAM (CTSP_ID) on delete restrict on update restrict;

