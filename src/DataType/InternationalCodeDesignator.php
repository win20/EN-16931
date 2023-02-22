<?php

namespace Tiime\EN16931\DataType;

enum InternationalCodeDesignator: string
{
    case SYSTEM_INFORMATION_ET_REPERTOIRE_DES_ENTREPRISE_ET_DES_ETABLISSEMENTS_SIRENE = "0002";
    case CODIFICATION_NUMERIQUE_DES_ETABLISSMENTS_FINANCIERS_EN_BELGIQUE = "0003";
    case NBS_OSI_NETWORK = "0004";
    case USA_FED_GOV_OSI_NETWORK = "0005";
    case USA_DOD_OSI_NETWORK = "0006";
    case ORGANISATIONSNUMMER = "0007";
    case LE_NUMERO_NATIONAL = "0008";
    case SIRET_CODE = "0009";
    case ORGANIZATIONAL_IDENTIFIERS_FOR_STRUCTURED_NAMES_UNDER_ISO_9541_PART_2 = "0010";
    case ICD_FOR_OSI_BASED_AMATEUR_RADIO_ORGANIZATIONS_NETWORK_OBJECTS_AND_APPLICATION_SERVICES = "0011";
    case EUROPEAN_COMPUTER_MANUFACTURERS_ASSOCIATION_ECMA = "0012";
    case VSA_FTP_CODE = "0013";
    case NIST_OSI_IMPLEMEMTS_WORKSHOP = "0014";
    case ELECTRONIC_DATA_INTERCHANGE_EDI = "0015";
    case EWOS_OBJECT_IDENTIFIERS = "0016";
    case COMMON_LANGUAGE = "0017";
    case SNA_OSI_NETWORK = "0018";
    case AIR_TRANSPORT_INDUSTRY_SERVICES_COMMUNICATIONS_NETWORK = "0019";
    case EUROPEAN_LABORATORY_FOR_PARTICLE_PHYSICS_CERN = "0020";
    case SOCIETY_FOR_WORLDWIDE_INTERBANK_FINANCIAL_TELECOMMUNICATION_SWIFT = "0021";
    case OSF_DISTRIBUTED_COMPUTING_OBJECT_IDENTIFICATION = "0022";
    case NORDIC_UNIVERSITY_AND_RESEARCH_NETWORK_NORDUNET = "0023";
    case DIGITAL_EQUIPMENT_CORPORATION_DEC = "0024";
    case OSI_ASIA_OCEANIA_WORKSHOP = "0025";
    case NATO_ISO_6523_ICDE_CODING_SCHEME = "0026";
    case AERONAUTICAL_TELECOMMUNICATIONS_NETWORK_ATN = "0027";
    case INTERNATIONAL_STANDARD_ISO_6523 = "0028";
    case THE_ALL_UNION_CLASSIFIER_OF_ENTERPRISES_AND_ORGANISATIONS = "0029";
    case AT_T_OSI_NETWORK = "0030";
    case EDI_PARTNER_IDENTIFICATION_CODE = "0031";
    case TELECOM_AUSTRALIA = "0032";
    case S_G_W_OSI_INTERNETWORK = "0033";
    case REUTER_OPEN_ADDRESS_STANDARD = "0034";
    case ISO_6523_ICD = "0035";
    case TELETRUST_OBJECT_IDENTIFIERS = "0036";
    case LY_TUNNUS = "0037";
    case THE_AUSTRALIAN_GOSIP_NETWORK = "0038";
    case THE_OZ_DOD_OSI_NETWORK = "0039";
    case UNILEVER_GROUP_COMPANIES = "0040";
    case CITICORP_GLOBAL_INFORMATION_NETWORK = "0041";
    case DBP_TELEKOM_OBJECT_IDENTIFIERS = "0042";
    case HYDRONETT = "0043";
    case THAI_INDUSTRIAL_STANDARDS_INSTITUTE_TISI = "0044";
    case ICI_COMPANY_IDENTIFICATION_SYSTEM = "0045";
    case FUNLOC = "0046";
    case BULL_ODI_DSA_UNIX_NETWORK = "0047";
    case OSINZ = "0048";
    case AUCKLAND_AREA_HEALTH = "0049";
    case FIRMENICH = "0050";
    case AGFA_DIS = "0051";
    case SOCIETY_OF_MOTION_PICTURE_AND_TELEVISION_ENGINEERS_SMPTE = "0052";
    case MIGROS_NETWORK_M_NETOPZ = "0053";
    case ISO6523_ICDPCR = "0054";
    case ENERGY_NET = "0055";
    case NOKIA_OBJECT_IDENTIFIERS_NOI = "0056";
    case SAINT_GOBAIN = "0057";
    case SIEMENS_CORPORATE_NETWORK = "0058";
    case DANZNET = "0059";
    case DATA_UNIVERSAL_NUMBERING_SYSTEM_DUNS_NUMBER = "0060";
    case SOFFEX_OSI = "0061";
    case KPN_OVN = "0062";
    case ASCOMOSINET = "0063";
    case UTC_UNIFORME_TRANSPORT_CODE = "0064";
    case SOLVAY_OSI_CODING = "0065";
    case ROCHE_CORPORATE_NETWORK = "0066";
    case ZELLWEGEROSINET = "0067";
    case INTEL_CORPORATION_OSI = "0068";
    case SITA_OBJECT_IDENTIFIER_TREE = "0069";
    case DAIMLERCHRYSLER_CORPORATE_NETWORK = "0070";
    case LEGO_OSI_NETWORK = "0071";
    case NAVISTAR_OSI_NETWORK = "0072";
    case ICD_FORMATTED_ATM_ADDRESS = "0073";
    case ARINC = "0074";
    case ALCANET_ALCATEL_ALSTHOM_CORPORATE_NETWORK = "0075";
    case SISTEMA_ITALIANO_DI_IDENTIFICAZIONE_DI_OGETTI_GESTITO_DA_UNINFO = "0076";
    case SISTEMA_ITALIANO_DI_INDIRIZZAMENTO_DI_RETI_OSI_GESTITO_DA_UNINFO = "0077";
    case MITEL_TERMINAL_OR_SWITCHING_EQUIPMENT = "0078";
    case ATM_FORUM = "0079";
    case UK_NATIONAL_HEALTH_SERVICE_SCHEME = "0080";
    case INTERNATIONAL_NSAP = "0081";
    case NORWEGIAN_TELECOMMUNICATIONS_AUTHORITY_S_NTA_S_EDI_IDENTIFIER_SCHEME = "0082";
    case ADVANCED_TELECOMMUNICATIONS_MODULES_LIMITED_CORPORATE_NETWORK = "0083";
    case ATHENS_CHAMBER_OF_COMMERCE_INDUSTRY_SCHEME = "0084";
    case SWISS_CHAMBERS_OF_COMMERCE_SCHEME = "0085";
    case UNITED_STATES_COUNCIL_FOR_INTERNATIONAL_BUSINESS_USCIB_SCHEME = "0086";
    case NATIONAL_FEDERATION_OF_CHAMBERS_OF_COMMERCE_INDUSTRY_OF_BELGIUM_SCHEME = "0087";
    case EAN_LOCATION_CODE = "0088";
    case THE_ASSOCIATION_OF_BRITISH_CHAMBERS_OF_COMMERCE_LTD_SCHEME = "0089";
    case INTERNET_IP_ADDRESSING_ISO_6523_ICD_ENCODING = "0090";
    case CISCO_SYSYTEMS_OSI_NETWORK = "0091";
    case REVENUE_CANADA_BUSINESS_NUMBER_REGISTRATION = "0093";
    case DEUTSCHER_INDUSTRIE_UND_HANDELSTAG_DIHT_SCHEME = "0094";
    case HEWLETT_PACKARD_COMPANY_INTERNAL_AM_NETWORK = "0095";
    case DANISH_CHAMBER_OF_COMMERCE_SCHEME = "0096";
    case FTI_EDIFORUM_ITALIA = "0097";
    case CHAMBER_OF_COMMERCE_TEL_AVIV_JAFFA_SCHEME = "0098";
    case SIEMENS_SUPERVISORY_SYSTEMS_NETWORK = "0099";
    case PNG_ICD_SCHEME = "0100";
    case SOUTH_AFRICAN_CODE_ALLOCATION = "0101";
    case HEAG = "0102";
    case BT_ICD_CODING_SYSTEM = "0104";
    case PORTUGUESE_CHAMBER_OF_COMMERCE_AND_INDUSTRY_SCHEME = "0105";
    case VERENIGING_VAN_KAMERS_VAN_KOOPHANDEL_EN_FABRIEKEN_IN_NEDERLAND = "0106";
    case ASSOCIATION_OF_SWEDISH_CHAMBERS_OF_COMMERCE_AND_INDUSTRY_SCHEME = "0107";
    case AUSTRALIAN_CHAMBERS_OF_COMMERCE_AND_INDUSTRY_SCHEME = "0108";
    case BELLSOUTH_ICD_AESA_ATM_END_SYSTEM_ADDRESS = "0109";
    case BELL_ATLANTIC = "0110";
    case OBJECT_IDENTIFIERS = "0111";
    case ISO_REGISTER_FOR_STANDARDS_PRODUCING_ORGANIZATIONS = "0112";
    case ORIGINNET = "0113";
    case CHECK_POINT_SOFTWARE_TECHNOLOGIES = "0114";
    case PACIFIC_BELL_DATA_COMMUNICATIONS_NETWORK = "0115";
    case PSS_OBJECT_IDENTIFIERS = "0116";
    case STENTOR_ICD_CODING_SYSTEM = "0117";
    case ATM_NETWORK_ZN_96 = "0118";
    case MCI_OSI_NETWORK = "0119";
    case ADVANTIS = "0120";
    case AFFABLE_SOFTWARE_DATA_INTERCHANGE_CODES = "0121";
    case BB_DATA_GMBH = "0122";
    case BASF_COMPANY_ATM_NETWORK = "0123";
    case IOTA_IDENTIFIERS_FOR_ORGANIZATIONS_FOR_TELECOMMUNICATIONS_ADDRESSING = "0124";
    case HENKEL_CORPORATE_NETWORK_H_NET = "0125";
    case GTE_OSI_NETWORK = "0126";
    case DRESDNER_BANK_CORPORATE_NETWORK = "0127";
    case BCNR_SWISS_CLEARING_BANK_NUMBER = "0128";
    case BPI_SWISS_BUSINESS_PARTNER_IDENTIFICATION_CODE = "0129";
    case DIRECTORATES_OF_THE_EUROPEAN_COMMISSION = "0130";
    case CODE_FOR_THE_IDENTIFICATION_OF_NATIONAL_ORGANIZATIONS = "0131";
    case CERTICOM_OBJECT_IDENTIFIERS = "0132";
    case TC68_OID = "0133";
    case INFONET_SERVICES_CORPORATION = "0134";
    case SIA_OBJECT_IDENTIFIERS = "0135";
    case CABLE_WIRELESS_GLOBAL_ATM_END_SYSTEM_ADDRESS_PLAN = "0136";
    case GLOBAL_AESA_SCHEME = "0137";
    case FRANCE_TELECOM_ATM_END_SYSTEM_ADDRESS_PLAN = "0138";
    case SAVVIS_COMMUNICATIONS_AESA_ = "0139";
    case TOSHIBA_ORGANIZATIONS_PARTNERS_AND_SUPPLIERS_TOPAS_CODE = "0140";
    case NATO_COMMERCIAL_AND_GOVERNMENT_ENTITY_SYSTEM = "0141";
    case SECETI_OBJECT_IDENTIFIERS = "0142";
    case EINESTEINET_AG = "0143";
    case DODAAC_DEPARTMENT_OF_DEFENSE_ACTIVITY_ADDRESS_CODE = "0144";
    case DGCP_DIRECTION_GENERALE_DE_LA_COMPTABILITE_PUBLIQUE = "0145";
    case DGI_DIRECTION_GENERALE_DES_IMPOTS = "0146";
    case STANDARD_COMPANY_CODE = "0147";
    case ITU_DATA_NETWORK_IDENTIFICATION_CODES_DNIC = "0148";
    case GLOBAL_BUSINESS_IDENTIFIER = "0149";
    case MADGE_NETWORKS_LTD_ICD_ATM_ADDRESSING_SCHEME = "0150";
    case AUSTRALIAN_BUSINESS_NUMBER_ABN_SCHEME = "0151";
    case EDIRA_SCHEME_IDENTIFIER_CODE = "0152";
    case CONCERT_GLOBAL_NETWORK_SERVICES_ICD_AESA = "0153";
    case IDENTIFICATION_NUMBER_OF_ECONOMIC_SUBJECTS_ICO = "0154";
    case GLOBAL_CROSSING_AESA_ATM_END_SYSTEM_ADDRESS = "0155";
    case AUNA = "0156";
    case ATM_INTERCONNECTION_WITH_THE_DUTCH_KPN_TELECOM = "0157";
    case IDENTIFICATION_NUMBER_OF_ECONOMIC_SUBJECT_ICO_STATE_STATISTICS = "0158";
    case ACTALIS_OBJECT_IDENTIFIERS = "0159";
    case GTIN_GLOBAL_TRADE_ITEM_NUMBER = "0160";
    case ECCMA_OPEN_TECHNICAL_DIRECTORY = "0161";
    case CEN_ISSS_OBJECT_IDENTIFIER_SCHEME = "0162";
    case US_EPA_FACILITY_IDENTIFIER = "0163";
    case TELUS_CORPORATION = "0164";
    case FIEIE_OBJECT_IDENTIFIERS = "0165";
    case SWISSGUIDE_IDENTIFIER_SCHEME = "0166";
    case PRIORITY_TELECOM_ATM_END_SYSTEM_ADDRESS_PLAN = "0167";
    case VODAFONE_IRELAND_OSI_ADDRESSING = "0168";
    case SWISS_FEDERAL_BUSINESS_IDENTIFICATION_NUMBER_ZEFIX = "0169";
    case TEIKOKU_COMPANY_CODE = "0170";
    case LUXEMBOURG_CP_CPS_INDEX = "0171";
    case PROJECT_GROUP_LISTS_OF_PROPERTIES_PROLIST = "0172";
    case ECLASS = "0173";
    case STEPNEXUS = "0174";
    case SIEMENS_AG = "0175";
    case PARADINE_GMBH = "0176";
    case ODETTE_INTERNATIONAL_LIMITED = "0177";
    case ROUTE1_MOBINET = "0178";
    case PENANGO_OBJECT_IDENTIFIERS = "0179";
    case LITHUANIAN_MILITARY_PKI = "0180";
    case NUMERO_D_IDENTIFICATION_SUISSE_DES_ENTERPRISES_IDE_UIDB = "0183";
    case DIGSTORG = "0184";
    case PERCEVAL_OBJECT_CODE = "0185";
    case TRUSTPOINT_OBJECT_IDENTIFIERS = "0186";
    case AMAZON_UNIQUE_IDENTIFICATION_SCHEME = "0187";
    case CORPORATE_NUMBER_OF_THE_SOCIAL_SECURITY_AND_TAX_NUMBER_SYSTEM = "0188";
    case EUROPEAN_BUSINESS_IDENTIFIER_EBID = "0189";
    case ORGANISATIE_INDENTIFICATIE_NUMMER_OIN = "0190";
    case COMPANY_CODE_ESTONIA = "0191";
    case ORGANISASJONSNUMMER = "0192";
    case UBL_BE_PARTY_IDENTIFIER = "0193";
    case KOIOS_OPEN_TECHNICAL_DICTIONARY = "0194";
    case SINGAPORE_NATIONWIDE_E_LNVOICE_FRAMEWORK = "0195";
    case ICELANDIC_IDENTIFIER_ISLENSK_KENNITALA = "0196";
    case APPLIA_PL_STANDARD = "0197";
    case ERSTORG = "0198";
    case LEGAL_ENTITY_IDENTIFIER_LEI = "0199";
    case LEGAL_ENTITY_CODE_LITHUANIA = "0200";
    case CODICE_UNIVOCO_UNITA_ORGANIZZATIVA_IPA = "0201";
    case INDIRIZZO_DI_POSTA_ELETTRONICA_CERTIFICATA = "0202";
    case EDELIVERY_NETWORK_PARTICIPANT_IDENTIFIER = "0203";
    case LEITWEG_ID = "0204";
    case CODDEST = "0205";
    case REGISTRE_DU_COMMERCE_ET_DE_L_INDUSTRIE_RCI = "0206";
    case PILOG_ONTOLOGY_CODIFICATION_IDENTIFIER_POCI = "0207";
    case NUMERO_D_ENTREPRISE_ONDERNEMINGSNUMMER_UNTERNEHMENSNUMMER = "0208";
    case GS1_IDENTIFICATION_KEYS = "0209";
    case CODICE_FISCALE = "0210";
    case PARTITA_IVA = "0211";
    case FINNISH_ORGANIZATION_IDENTIFIER = "0212";
    case FINNISH_ORGANIZATION_VALUE_ADD_TAX_IDENTIFIER = "0213";
    case TRADEPLACE_TRADEPI_STANDARD = "0214";
    case NET_SERVICE_ID = "0215";
    case OVTCODE = "0216";
    case THE_NETHERLANDS_CHAMBER_OF_COMMERCE_AND_INDUSTRY_ESTABLISHMENT_NUMBER = "0217";
    case UNIFIED_REGISTRATION_NUMBER_LATVIA = "0218";
    case TAXPAYER_REGISTRATION_CODE_LATVIA = "0219";
    case THE_REGISTER_OF_NATURAL_PERSONS_LATVIA = "0220";
}
