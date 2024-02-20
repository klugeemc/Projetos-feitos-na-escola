import os
import unittest

def get_file_extension(filename):
    return filename.split('.')[-1].lower()

class Testador(unittest.TestCase):

    def test_file_extensions(self):
        files = os.listdir(os.path.dirname(os.path.realpath(__file__)))

        counts = {'html': 0, 'css': 0, 'js': 0}

        for some_file in files:
            extension = get_file_extension(some_file)
            try:
                counts[extension] += 1
            except KeyError:
                pass

        self.assertGreaterEqual(
            5, counts['html'],
            'Seu projeto precisa ter ao menos 5 arquivos HTML, mas você tem {0}!'.format(counts['html'])
        )
        self.assertEqual(
            1, counts['css'],
            'Seu projeto deve ter apenas um arquivo CSS, mas você tem {0}!'.format(counts['css'])
        )
        self.assertGreaterEqual(
            2, counts['js'],
            'Seu projeto deve ter ao menos dois arquivos JS, mas você tem {0}!'.format(counts['js'])
        )

if __name__ == '__main__':
    unittest.main()