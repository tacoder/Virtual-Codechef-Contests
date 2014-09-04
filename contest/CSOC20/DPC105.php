<?php require("../../includes/header.php"); ?><h1>Word Grid</h1><div class="content">

<p class="MsoNormal">
            <span lang="RU">Given a M by N grid of letters, (1&lt;=M,N&lt;=50), and a<br />
            list of words, find the location in the grid at which the word can be found. A<br />
            word matches a straight, uninterrupted line of letters in the grid. A word can<br />
            match the letters in the grid in the grid regardless of case (i.e. upper and<br />
            lower case letters are to be treated as the same). The matching can be done in<br />
            any of the eight directions either horizontally, vertically or diagonally<br />
            through the grid.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Input</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">The input will contain one or more test cases. The<br />
            first line of each test case begins with a pair of integers, M followed by N,<br />
            1&lt;=M,N&lt;=50 on a single line. The next M lines contain N letters each; this is<br />
            the grid of letters in which the words of the list must be found. The letters in<br />
            the grid may be in upper or lower case. Following the grid of letters, another<br />
            integer K appears on a line by itself (1&lt;=K&lt;=20). The next K lines of input<br />
            contain the list of words to search for, one word per line. These words may<br />
            contain upper and lower case letters only (no spaces, hyphens or other<br />
            non-alphabetic characters).The input will end with two zeroes for M and N.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><br />
            <span lang="RU">Output</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">             <br />
            For each word in the word list, output a pair of integers representing the<br />
            location of the corresponding word in the grid must be output. The integers must<br />
            be separated by a single space. The first integer is the line in the grid where<br />
            the first letter of the given word can be found (1 represents the topmost line<br />
            in the grid, and m represents the bottommost line). The second integer is the<br />
            column in the grid where the first letter of the given word can be found (1<br />
            represents the leftmost column in the grid, and n represents the rightmost<br />
            column in the grid). If a word can be found more than once in the grid, then the<br />
            location which is the output should correspond to the uppermost occurrence of<br />
            the word (i.e. the occurrence which places the first letter of the word closest<br />
            to the top of the grid). If two or more words are uppermost, the output should<br />
            correspond to the leftmost of these occurrences. All words can be found at least<br />
            once in the grid. Separate the output of each test case with a blank line.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Sample Input</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">8 11</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">abcDEFGhigg</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">hEbkWalDork</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">FtyAwaldoRm</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">FtsimrLqsrc</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">byoArBeDeyv</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Klcbqwikomk</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">strEBGadhrb</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">yUiqlxcnBjf</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">4</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Waldorf</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Bambi</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Betty</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Dagbert</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">4 4</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">xbcd</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">xbcd</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">xbcd</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">abce</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">dcba</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">0 0</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Sample Output</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">2 5</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">2 3</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1 2</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">7 8</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1 4</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>