<?php

declare(strict_types=1);

namespace Tiime\EN16931\DataType;

enum VatExoneration: string
{
    case COUNCIL_DIRECTIVE_132 = "VATEX-EU-132";
    case COUNCIL_DIRECTIVE_132_1A = "VATEX-EU-132-1A";
    case COUNCIL_DIRECTIVE_132_1B = "VATEX-EU-132-1B";
    case COUNCIL_DIRECTIVE_132_1C = "VATEX-EU-132-1C";
    case COUNCIL_DIRECTIVE_132_1D = "VATEX-EU-132-1D";
    case COUNCIL_DIRECTIVE_132_1E = "VATEX-EU-132-1E";
    case COUNCIL_DIRECTIVE_132_1F = "VATEX-EU-132-1F";
    case COUNCIL_DIRECTIVE_132_1G = "VATEX-EU-132-1G";
    case COUNCIL_DIRECTIVE_132_1H = "VATEX-EU-132-1H";
    case COUNCIL_DIRECTIVE_132_1I = "VATEX-EU-132-1I";
    case COUNCIL_DIRECTIVE_132_1J = "VATEX-EU-132-1J";
    case COUNCIL_DIRECTIVE_132_1K = "VATEX-EU-132-1K";
    case COUNCIL_DIRECTIVE_132_1L = "VATEX-EU-132-1L";
    case COUNCIL_DIRECTIVE_132_1M = "VATEX-EU-132-1M";
    case COUNCIL_DIRECTIVE_132_1N = "VATEX-EU-132-1N";
    case COUNCIL_DIRECTIVE_132_1O = "VATEX-EU-132-1O";
    case COUNCIL_DIRECTIVE_132_1P = "VATEX-EU-132-1P";
    case COUNCIL_DIRECTIVE_132_1Q = "VATEX-EU-132-1Q";
    case COUNCIL_DIRECTIVE_143 = "VATEX-EU-143";
    case COUNCIL_DIRECTIVE_143_1A = "VATEX-EU-143-1A";
    case COUNCIL_DIRECTIVE_143_1B = "VATEX-EU-143-1B";
    case COUNCIL_DIRECTIVE_143_1C = "VATEX-EU-143-1C";
    case COUNCIL_DIRECTIVE_143_1D = "VATEX-EU-143-1D";
    case COUNCIL_DIRECTIVE_143_1E = "VATEX-EU-143-1E";
    case COUNCIL_DIRECTIVE_143_1F = "VATEX-EU-143-1F";
    case COUNCIL_DIRECTIVE_143_1FA = "VATEX-EU-143-1FA";
    case COUNCIL_DIRECTIVE_143_1G = "VATEX-EU-143-1G";
    case COUNCIL_DIRECTIVE_143_1H = "VATEX-EU-143-1H";
    case COUNCIL_DIRECTIVE_143_1I = "VATEX-EU-143-1I";
    case COUNCIL_DIRECTIVE_143_1J = "VATEX-EU-143-1J";
    case COUNCIL_DIRECTIVE_143_1K = "VATEX-EU-143-1K";
    case COUNCIL_DIRECTIVE_143_1L = "VATEX-EU-143-1L";
    case COUNCIL_DIRECTIVE_148 = "VATEX-EU-148";
    case COUNCIL_DIRECTIVE_148_A = "VATEX-EU-148-A";
    case COUNCIL_DIRECTIVE_148_B = "VATEX-EU-148-B";
    case COUNCIL_DIRECTIVE_148_C = "VATEX-EU-148-C";
    case COUNCIL_DIRECTIVE_148_D = "VATEX-EU-148-D";
    case COUNCIL_DIRECTIVE_148_E = "VATEX-EU-148-E";
    case COUNCIL_DIRECTIVE_148_F = "VATEX-EU-148-F";
    case COUNCIL_DIRECTIVE_148_G = "VATEX-EU-148-G";
    case COUNCIL_DIRECTIVE_151 = "VATEX-EU-151";
    case COUNCIL_DIRECTIVE_151_1A = "VATEX-EU-151-1A";
    case COUNCIL_DIRECTIVE_151_1AA = "VATEX-EU-151-1AA";
    case COUNCIL_DIRECTIVE_151_1B = "VATEX-EU-151-1B";
    case COUNCIL_DIRECTIVE_151_1C = "VATEX-EU-151-1C";
    case COUNCIL_DIRECTIVE_151_1D = "VATEX-EU-151-1D";
    case COUNCIL_DIRECTIVE_151_1E = "VATEX-EU-151-1E";
    case COUNCIL_DIRECTIVE_309 = "VATEX-EU-309";
    case COUNCIL_DIRECTIVE_79_C = "VATEX-EU-79-C";
    case REVERSE_CHARGE = "VATEX-EU-AE";
    case TRAVEL_AGENTS_VAT_SCHEME = "VATEX-EU-D";
    case SECOND_HAND_GOODS_VAT_SCHEME = "VATEX-EU-F";
    case EXPORT_OUTSIDE_THE_EU = "VATEX-EU-G";
    case WORKS_OF_ART_VAT_SCHEME = "VATEX-EU-I";
    case INTRA_COMMUNITY_SUPPLY = "VATEX-EU-IC";
    case COLLECTORS_ITEMS_AND_ANTIQUES_VAT_SCHEME = "VATEX-EU-J";
    case NOT_SUBJECT_TO_VAT = "VATEX-EU-O";
}
