<?php

declare(strict_types=1);

namespace Tiime\EN16931\DataType;

enum ChargeReasonCode: string
{
    case ADVERTISING = "AA";
    case TELECOMMUNICATION = "AAA";
    case TECHNICAL_MODIFICATION = "AAC";
    case JOB_ORDER_PRODUCTION = "AAD";
    case OUTLAYS = "AAE";
    case OFF_PREMISES = "AAF";
    case ADDITIONAL_PROCESSING = "AAH";
    case ATTESTING = "AAI";
    case ACCEPTANCE = "AAS";
    case RUSH_DELIVERY = "AAT";
    case SPECIAL_CONSTRUCTION = "AAV";
    case AIRPORT_FACILITIES = "AAY";
    case CONCESSION = "AAZ";
    case COMPULSORY_STORAGE = "ABA";
    case FUEL_REMOVAL = "ABB";
    case INTO_PLANE = "ABC";
    case OVERTIME = "ABD";
    case TOOLING = "ABF";
    case MISCELLANEOUS = "ABK";
    case ADDITIONAL_PACKAGING = "ABL";
    case DUNNAGE = "ABN";
    case CONTAINERISATION = "ABR";
    case CARTON_PACKING = "ABS";
    case HESSIAN_WRAPPED = "ABT";
    case POLYETHYLENE_WRAP_PACKING = "ABU";
    case MISCELLANEOUS_TREATMENT = "ACF";
    case ENAMELLING_TREATMENT = "ACG";
    case HEAT_TREATMENT = "ACH";
    case PLATING_TREATMENT = "ACI";
    case PAINTING = "ACJ";
    case POLISHING = "ACK";
    case PRIMING = "ACL";
    case PRESERVATION_TREATMENT = "ACM";
    case FITTING = "ACS";
    case CONSOLIDATION = "ADC";
    case BILL_OF_LADING = "ADE";
    case AIRBAG = "ADJ";
    case TRANSFER = "ADK";
    case SLIPSHEET = "ADL";
    case BINDING = "ADM";
    case REPAIR_OR_REPLACEMENT_OF_BROKEN_RETURNABLE_PACKAGE = "ADN";
    case EFFICIENT_LOGISTICS = "ADO";
    case MERCHANDISING = "ADP";
    case PRODUCT_MIX = "ADQ";
    case OTHER_SERVICES = "ADR";
    case PICK_UP = "ADT";
    case CHRONIC_ILLNESS = "ADW";
    case NEW_PRODUCT_INTRODUCTION = "ADY";
    case DIRECT_DELIVERY = "ADZ";
    case DIVERSION = "AEA";
    case DISCONNECT = "AEB";
    case DISTRIBUTION = "AEC";
    case HANDLING_OF_HAZARDOUS_CARGO = "AED";
    case RENTS_AND_LEASES = "AEF";
    case LOCATION_DIFFERENTIAL = "AEH";
    case AIRCRAFT_REFUELING = "AEI";
    case FUEL_SHIPPED_INTO_STORAGE = "AEJ";
    case CASH_ON_DELIVERY = "AEK";
    case SMALL_ORDER_PROCESSING_SERVICE = "AEL";
    case CLERICAL_OR_ADMINISTRATIVE_SERVICES = "AEM";
    case GUARANTEE = "AEN";
    case COLLECTION_AND_RECYCLING = "AEO";
    case COPYRIGHT_FEE_COLLECTION = "AEP";
    case VETERINARY_INSPECTION_SERVICE = "AES";
    case PENSIONER_SERVICE = "AET";
    case MEDICINE_FREE_PASS_HOLDER = "AEU";
    case ENVIRONMENTAL_PROTECTION_SERVICE = "AEV";
    case ENVIRONMENTAL_CLEAN_UP_SERVICE = "AEW";
    case NATIONAL_CHEQUE_PROCESSING_SERVICE_OUTSIDE_ACCOUNT_AREA = "AEX";
    case NATIONAL_PAYMENT_SERVICE_OUTSIDE_ACCOUNT_AREA = "AEY";
    case NATIONAL_PAYMENT_SERVICE_WITHIN_ACCOUNT_AREA = "AEZ";
    case ADJUSTMENTS = "AJ";
    case AUTHENTICATION = "AU";
    case CATALOGUING = "CA";
    case CARTAGE = "CAB";
    case CERTIFICATION = "CAD";
    case CERTIFICATE_OF_CONFORMANCE = "CAE";
    case CERTIFICATE_OF_ORIGIN = "CAF";
    case CUTTING = "CAI";
    case CONSULAR_SERVICE = "CAJ";
    case CUSTOMER_COLLECTION = "CAK";
    case PAYROLL_PAYMENT_SERVICE = "CAL";
    case CASH_TRANSPORTATION = "CAM";
    case HOME_BANKING_SERVICE = "CAN";
    case BILATERAL_AGREEMENT_SERVICE = "CAO";
    case INSURANCE_BROKERAGE_SERVICE = "CAP";
    case CHEQUE_GENERATION = "CAQ";
    case PREFERENTIAL_MERCHANDISING_LOCATION = "CAR";
    case CRANE = "CAS";
    case SPECIAL_COLOUR_SERVICE = "CAT";
    case SORTING = "CAU";
    case BATTERY_COLLECTION_AND_RECYCLING = "CAV";
    case PRODUCT_TAKE_BACK_FEE = "CAW";
    case QUALITY_CONTROL_RELEASED = "CAX";
    case QUALITY_CONTROL_HELD = "CAY";
    case QUALITY_CONTROL_EMBARGO = "CAZ";
    case CAR_LOADING = "CD";
    case CLEANING = "CG";
    case CIGARETTE_STAMPING = "CS";
    case COUNT_AND_RECOUNT = "CT";
    case LAYOUT_DESIGN = "DAB";
    case ASSORTMENT_ALLOWANCE = "DAC";
    case DRIVER_ASSIGNED_UNLOADING = "DAD";
    case DEBTOR_BOUND = "DAF";
    case DEALER_ALLOWANCE = "DAG";
    case ALLOWANCE_TRANSFERABLE_TO_THE_CONSUMER = "DAH";
    case GROWTH_OF_BUSINESS = "DAI";
    case INTRODUCTION_ALLOWANCE = "DAJ";
    case MULTI_BUY_PROMOTION = "DAK";
    case PARTNERSHIP = "DAL";
    case RETURN_HANDLING = "DAM";
    case MINIMUM_ORDER_NOT_FULFILLED_CHARGE = "DAN";
    case POINT_OF_SALES_THRESHOLD_ALLOWANCE = "DAO";
    case WHOLESALING_DISCOUNT = "DAP";
    case DOCUMENTARY_CREDITS_TRANSFER_COMMISSION = "DAQ";
    case DELIVERY = "DL";
    case ENGRAVING = "EG";
    case EXPEDITING = "EP";
    case EXCHANGE_RATE_GUARANTEE = "ER";
    case FABRICATION = "FAA";
    case FREIGHT_EQUALIZATION = "FAB";
    case FREIGHT_EXTRAORDINARY_HANDLING = "FAC";
    case FREIGHT_SERVICE = "FC";
    case FILLING_HANDLING = "FH";
    case FINANCING = "FI";
    case GRINDING = "GAA";
    case HOSE = "HAA";
    case HANDLING = "HD";
    case HOISTING_AND_HAULING = "HH";
    case INSTALLATION = "IAA";
    case INSTALLATION_AND_WARRANTY = "IAB";
    case INSIDE_DELIVERY = "ID";
    case INSPECTION = "IF";
    case INSTALLATION_AND_TRAINING = "IR";
    case INVOICING = "IS";
    case KOSHERING = "KO";
    case CARRIER_COUNT = "L1";
    case LABELLING = "LA";
    case LABOUR = "LAA";
    case REPAIR_AND_RETURN = "LAB";
    case LEGALISATION = "LF";
    case MOUNTING = "MAE";
    case MAIL_INVOICE = "MI";
    case MAIL_INVOICE_TO_EACH_LOCATION = "ML";
    case NON_RETURNABLE_CONTAINERS = "NAA";
    case OUTSIDE_CABLE_CONNECTORS = "OA";
    case INVOICE_WITH_SHIPMENT = "PA";
    case PHOSPHATIZING = "PAA";
    case PACKING = "PC";
    case PALLETIZING = "PL";
    case REPACKING = "RAB";
    case REPAIR = "RAC";
    case RETURNABLE_CONTAINER = "RAD";
    case RESTOCKING = "RAF";
    case RE_DELIVERY = "RE";
    case REFURBISHING = "RF";
    case RAIL_WAGON_HIRE = "RH";
    case LOADING = "RV";
    case SALVAGING = "SA";
    case SHIPPING_AND_HANDLING = "SAA";
    case SPECIAL_PACKAGING = "SAD";
    case STAMPING = "SAE";
    case CONSIGNEE_UNLOAD = "SAI";
    case SHRINK_WRAP = "SG";
    case SPECIAL_HANDLING = "SH";
    case SPECIAL_FINISH = "SM";
    case SET_UP = "SU";
    case TANK_RENTING = "TAB";
    case TESTING = "TAC";
    case TRANSPORTATION_THIRD_PARTY_BILLING = "TT";
    case TRANSPORTATION_BY_VENDOR = "TV";
    case DROP_YARD = "V1";
    case DROP_DOCK = "V2";
    case WAREHOUSING = "WH";
    case COMBINE_ALL_SAME_DAY_SHIPMENT = "XAA";
    case SPLIT_PICK_UP = "YY";
    case MUTUALLY_DEFINED = "ZZZ";
}
