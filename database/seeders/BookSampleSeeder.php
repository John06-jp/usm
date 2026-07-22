<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Program;
use App\Support\PublicStoragePublisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BookSampleSeeder extends Seeder
{
    public function run(): void
    {
        $library = 'Academic Library';
        $section = 'Main stacks';

        $sampleCoverPath = 'covers/opac-seed-cover.svg';
        Storage::disk('public')->put($sampleCoverPath, <<<'SVG'
<svg xmlns="http://www.w3.org/2000/svg" width="600" height="900" viewBox="0 0 600 900">
  <defs><linearGradient id="cover" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#0a2540"/><stop offset="1" stop-color="#2a7355"/></linearGradient></defs>
  <rect width="600" height="900" rx="24" fill="url(#cover)"/>
  <path d="M72 92h456M72 808h456" stroke="#f0a526" stroke-width="8"/>
  <path d="M190 294h220v250H190c-39 0-70 31-70 70V364c0-39 31-70 70-70Z" fill="none" stroke="#fff" stroke-width="18"/>
  <path d="M120 574c0-39 31-70 70-70h220" fill="none" stroke="#fff" stroke-width="18"/>
  <text x="300" y="170" fill="#fff" font-family="Arial, sans-serif" font-size="30" font-weight="700" text-anchor="middle">PANTAS LIBRARY</text>
  <text x="300" y="690" fill="#fff" font-family="Georgia, serif" font-size="48" font-weight="700" text-anchor="middle">Sample Book</text>
  <text x="300" y="744" fill="#dbeafe" font-family="Arial, sans-serif" font-size="25" text-anchor="middle">with cover image</text>
</svg>
SVG);
        $sampleCoverPath = PublicStoragePublisher::publish($sampleCoverPath);

        /**
         * Each entry is one physical copy. Duplicate titles share bibliographic fields.
         *
         * @var list<array<string, mixed>>
         */
        $copies = [
            // —— Gen Ed / IT ——
            [
                'accession_no' => 'GG-2024-0001',
                'rfid' => 'RFID-GG-00001',
                'barcode' => 'BC-GG-00001',
                'title_statement' => 'Introduction to Computer Science',
                'main_author' => 'Garcia, Maria L.',
                'publisher' => 'Oxford University Press',
                'pub_year' => '2022',
                'isbn' => '9780198765432',
                'call_number' => 'QA76 .G37 2022',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS', 'BSIT'],
                'course' => 'Introduction to Computing',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0002',
                'rfid' => 'RFID-GG-00002',
                'barcode' => 'BC-GG-00002',
                'title_statement' => 'Introduction to Computer Science',
                'main_author' => 'Garcia, Maria L.',
                'publisher' => 'Oxford University Press',
                'pub_year' => '2022',
                'isbn' => '9780198765432',
                'call_number' => 'QA76 .G37 2022 c.2',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS', 'BSIT'],
                'course' => 'Introduction to Computing',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0003',
                'rfid' => 'RFID-GG-00003',
                'barcode' => 'BC-GG-00003',
                'title_statement' => 'Data Structures and Algorithms in Java',
                'main_author' => 'Lafore, Robert',
                'publisher' => 'Sams Publishing',
                'pub_year' => '2021',
                'isbn' => '9780134670945',
                'call_number' => 'QA76.73 .J38 L34 2021',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS'],
                'course' => 'Data Structures',
                'year' => '2nd Year',
            ],
            // —— Prof Ed ——
            [
                'accession_no' => 'GG-2024-0004',
                'rfid' => 'RFID-GG-00004',
                'barcode' => 'BC-GG-00004',
                'title_statement' => 'Teaching in the Elementary Grades',
                'main_author' => 'Aquino, Gaudencio V.',
                'publisher' => 'Rex Book Store',
                'pub_year' => '2020',
                'call_number' => 'LB1555 .A68 2020',
                'content_type' => 'Printed',
                'curriculum' => 'prof ed',
                'program_codes' => ['BEED', 'BSED'],
                'course' => 'Principles of Teaching',
                'year' => '2nd Year',
            ],
            [
                'accession_no' => 'GG-2024-0005',
                'rfid' => 'RFID-GG-00005',
                'barcode' => 'BC-GG-00005',
                'title_statement' => 'Curriculum Development for Teachers',
                'main_author' => 'Ornstein, Allan C.',
                'publisher' => 'Cengage Learning',
                'pub_year' => '2019',
                'call_number' => 'LB2806 .O78 2019',
                'content_type' => 'Printed',
                'curriculum' => 'prof ed',
                'program_codes' => ['BSED'],
                'course' => 'Curriculum Planning',
                'year' => '2nd Year',
            ],
            [
                'accession_no' => 'GG-2024-0006',
                'rfid' => 'RFID-GG-00006',
                'barcode' => 'BC-GG-00006',
                'title_statement' => 'Curriculum Development for Teachers',
                'main_author' => 'Ornstein, Allan C.',
                'publisher' => 'Cengage Learning',
                'pub_year' => '2019',
                'call_number' => 'LB2806 .O78 2019 c.2',
                'content_type' => 'Printed',
                'curriculum' => 'prof ed',
                'program_codes' => ['BSED'],
                'course' => 'Curriculum Planning',
                'year' => '2nd Year',
            ],
            // —— Filipiniana ——
            [
                'accession_no' => 'GG-2024-0007',
                'rfid' => 'RFID-GG-00007',
                'barcode' => 'BC-GG-00007',
                'title_statement' => 'History of the Filipino People',
                'main_author' => 'Agoncillo, Teodoro A.',
                'publisher' => 'Garotech Publishing',
                'pub_year' => '2018',
                'call_number' => 'DS676 .A35 2018',
                'content_type' => 'Printed',
                'curriculum' => 'filipiniana',
                'program_codes' => ['BEED', 'BSED', 'BSBA', 'BSCS', 'BSIT'],
                'course' => 'Readings in Philippine History',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0008',
                'rfid' => 'RFID-GG-00008',
                'barcode' => 'BC-GG-00008',
                'title_statement' => 'Noli Me Tangere',
                'main_author' => 'Rizal, José',
                'publisher' => 'National Historical Commission',
                'pub_year' => '2017',
                'call_number' => 'PQ8891 .R5 N65 2017',
                'content_type' => 'Printed',
                'curriculum' => 'filipiniana',
                'program_codes' => ['BEED', 'BSED'],
                'course' => 'Readings in Philippine History',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0009',
                'rfid' => 'RFID-GG-00009',
                'barcode' => 'BC-GG-00009',
                'title_statement' => 'Noli Me Tangere',
                'main_author' => 'Rizal, José',
                'publisher' => 'National Historical Commission',
                'pub_year' => '2017',
                'call_number' => 'PQ8891 .R5 N65 2017 c.2',
                'content_type' => 'Printed',
                'curriculum' => 'filipiniana',
                'program_codes' => ['BEED', 'BSED'],
                'course' => 'Readings in Philippine History',
                'year' => '1st Year',
            ],
            // —— General reference ——
            [
                'accession_no' => 'GG-2024-0010',
                'rfid' => 'RFID-GG-00010',
                'barcode' => 'BC-GG-00010',
                'title_statement' => 'Merriam-Webster\'s Collegiate Dictionary',
                'main_author' => 'Merriam-Webster',
                'publisher' => 'Merriam-Webster, Inc.',
                'pub_year' => '2023',
                'call_number' => 'REF PE1628 .M47 2023',
                'content_type' => 'Printed',
                'curriculum' => 'general reference',
                'library_name' => 'Academic Library',
                'section' => 'Reference',
                'program_codes' => ['BSCS', 'BSIT', 'BEED', 'BSED', 'BSBA', 'BSN'],
                'course' => 'Purposive Communication',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0011',
                'rfid' => 'RFID-GG-00011',
                'barcode' => 'BC-GG-00011',
                'title_statement' => 'World Almanac and Book of Facts',
                'main_author' => 'World Almanac Editors',
                'publisher' => 'World Almanac Books',
                'pub_year' => '2024',
                'call_number' => 'REF AY67 .W67 2024',
                'content_type' => 'Printed',
                'curriculum' => 'general reference',
                'library_name' => 'Academic Library',
                'section' => 'Reference',
                'program_codes' => ['BSCS', 'BSIT', 'BEED', 'BSED', 'BSBA', 'BSN'],
                'course' => 'The Contemporary World',
                'year' => '2nd Year',
            ],
            // —— Nursing / Business ——
            [
                'accession_no' => 'GG-2024-0012',
                'rfid' => 'RFID-GG-00012',
                'barcode' => 'BC-GG-00012',
                'title_statement' => 'Fundamentals of Nursing',
                'main_author' => 'Kozier, Barbara',
                'publisher' => 'Pearson',
                'pub_year' => '2021',
                'isbn' => '9780133974364',
                'call_number' => 'RT41 .K69 2021',
                'content_type' => 'Printed',
                'curriculum' => 'prof ed',
                'program_codes' => ['BSN'],
                'course' => 'Fundamentals of Nursing',
                'year' => '1st Year',
            ],
            [
                'accession_no' => 'GG-2024-0013',
                'rfid' => 'RFID-GG-00013',
                'barcode' => 'BC-GG-00013',
                'title_statement' => 'Principles of Marketing',
                'main_author' => 'Kotler, Philip',
                'publisher' => 'Pearson',
                'pub_year' => '2020',
                'call_number' => 'HF5415 .K67 2020',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSBA'],
                'course' => 'Marketing Management',
                'year' => '3rd Year',
            ],
            [
                'accession_no' => 'GG-2024-0014',
                'rfid' => 'RFID-GG-00014',
                'barcode' => 'BC-GG-00014',
                'title_statement' => 'Principles of Marketing',
                'main_author' => 'Kotler, Philip',
                'publisher' => 'Pearson',
                'pub_year' => '2020',
                'call_number' => 'HF5415 .K67 2020 c.2',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSBA'],
                'course' => 'Marketing Management',
                'year' => '3rd Year',
            ],
            [
                'accession_no' => 'GG-2024-0015',
                'rfid' => 'RFID-GG-00015',
                'barcode' => 'BC-GG-00015',
                'title_statement' => 'Database System Concepts',
                'main_author' => 'Silberschatz, Abraham',
                'publisher' => 'McGraw-Hill',
                'pub_year' => '2023',
                'isbn' => '9780078025907',
                'call_number' => 'QA76.9 .D3 S563 2023',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS', 'BSIT'],
                'course' => 'Database Systems',
                'year' => '3rd Year',
            ],
            [
                'accession_no' => 'GG-2024-0016',
                'rfid' => 'RFID-GG-00016',
                'barcode' => 'BC-GG-00016',
                'title_statement' => 'Research Methods in Education',
                'main_author' => 'Cohen, Louis',
                'publisher' => 'Routledge',
                'pub_year' => '2018',
                'call_number' => 'LB1028 .C577 2018',
                'content_type' => 'Printed',
                'curriculum' => 'prof ed',
                'program_codes' => ['BEED', 'BSED'],
                'course' => 'Research in Education',
                'year' => '4th Year',
            ],
            [
                'accession_no' => 'GG-2024-0017',
                'rfid' => 'RFID-GG-00017',
                'barcode' => 'BC-GG-00017',
                'title_statement' => 'Philippine Constitution',
                'main_author' => 'Philippine Government',
                'publisher' => 'National Government',
                'pub_year' => '1987',
                'call_number' => 'KPM1744 .P45 1987',
                'content_type' => 'Printed',
                'curriculum' => 'filipiniana',
                'program_codes' => ['BEED', 'BSED', 'BSBA', 'BSCS', 'BSIT'],
                'course' => 'Ethics',
                'year' => '2nd Year',
            ],
            [
                'accession_no' => 'GG-2024-0018',
                'rfid' => 'RFID-GG-00018',
                'barcode' => 'BC-GG-00018',
                'title_statement' => 'Encyclopedia of Philippine Art',
                'main_author' => 'CCP Encyclopedia Staff',
                'publisher' => 'Cultural Center of the Philippines',
                'pub_year' => '2015',
                'call_number' => 'REF NX572 .P5 E53 2015',
                'content_type' => 'Printed',
                'curriculum' => 'general reference',
                'library_name' => 'Academic Library',
                'section' => 'Reference',
                'program_codes' => ['BSCS', 'BSIT', 'BEED', 'BSED', 'BSBA', 'BSN'],
                'course' => 'Art Appreciation',
                'year' => '2nd Year',
            ],
            [
                'accession_no' => 'GG-2024-0019',
                'rfid' => 'RFID-GG-00019',
                'barcode' => 'BC-GG-00019',
                'title_statement' => 'OPAC Sample Book with Cover',
                'main_author' => 'PANTAS Library',
                'publisher' => 'PANTAS Press',
                'pub_year' => '2026',
                'isbn' => '9780000000019',
                'call_number' => 'Z711 .P36 2026',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS', 'BSIT'],
                'course' => 'Library Orientation',
                'year' => '1st Year',
                'cover_image' => $sampleCoverPath,
            ],
            [
                'accession_no' => 'GG-2024-0020',
                'rfid' => 'RFID-GG-00020',
                'barcode' => 'BC-GG-00020',
                'title_statement' => 'OPAC Sample Book without Cover',
                'main_author' => 'PANTAS Library',
                'publisher' => 'PANTAS Press',
                'pub_year' => '2026',
                'isbn' => '9780000000020',
                'call_number' => 'Z711 .P37 2026',
                'content_type' => 'Printed',
                'curriculum' => 'gen ed',
                'program_codes' => ['BSCS', 'BSIT'],
                'course' => 'Library Orientation',
                'year' => '1st Year',
                'cover_image' => null,
            ],
        ];

        $created = 0;

        foreach ($copies as $row) {
            $programCodes = $row['program_codes'] ?? [];
            unset($row['program_codes']);

            $book = Book::updateOrCreate(
                ['accession_no' => $row['accession_no']],
                array_merge([
                    'availability' => 'Available',
                    'library_name' => $library,
                    'section' => $section,
                    'cataloging_source_e' => 'rda',
                ], $row)
            );

            if ($programCodes !== []) {
                $ids = Program::whereIn('program_code', $programCodes)->pluck('id');
                $book->programs()->sync($ids);
            } else {
                $book->programs()->detach();
            }

            $created++;
        }

        $titleCount = collect($copies)->pluck('title_statement')->unique()->count();

        $withPrograms = Book::whereHas('programs')->count();
        $withCourse = Book::whereNotNull('course')->where('course', '!=', '')->count();

        $this->command?->info("{$created} book copies seeded ({$titleCount} unique titles). Accession GG-2024-0001 through GG-2024-0020.");
        $this->command?->info("{$withPrograms} copies linked to programs; {$withCourse} copies have a course set.");
    }
}
