<?php require("../../includes/header.php"); ?><h1>MineSweeper</h1><div class="content">

<p class="MsoNormal">
            <span lang="RU">Have you ever played Minesweeper? It’s a cute little<br />
            game which comes within a certain Operating System which name we can’t really<br />
            remember. Well, the goal of the game is to find where are all the mines within a<br />
            MxN field. To help you, the game shows a number in a square which tells you how<br />
            many mines there are adjacent to that square. For instance, suppose the<br />
            following 4x4 field with 2 mines (which are represented by an * character):</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">*…</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">….</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">.*..</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">….</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">If we would represent the same field placing the hint<br />
            numbers described above, we would end up with:</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">*100</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">2210</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1*10</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1110</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">As you may have already notice, each square may have<br />
            at most 8 adjacent squares.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Input:</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">The input will consist of an arbitrary number of<br />
            fields. The first line of each field contains two integers n and m (0&lt;n, m&lt;=100)<br />
            which stands for the number of lines and columns of the field. Each safe square<br />
            is represented by an “.” Character (without the quotes) and each mine is<br />
            represented by an “*” character (without the quotes). The first field line where<br />
            n=m=0 represents the end of input and should not be processed.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Output:</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">For each field, you must print the following message<br />
            in a line alone:</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Field #x:</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">Where x stands for the number of the field (starting<br />
            from 1). The next n lines should contain the field with the “.” Characters<br />
            replaced by the number of adjacent mines to that square. There must be an empty<br />
            line between field outputs.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU"> </span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b><span lang="RU">Sample Input</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">4 4</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">*…</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">….</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">.*..</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">….</span><span lang="RU"> </span>
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
            <span lang="RU">Field #1:</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">*100</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">2210</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1*10</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU">1110</span><span lang="RU"> </span>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FS, GO, JAVA, JS, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>