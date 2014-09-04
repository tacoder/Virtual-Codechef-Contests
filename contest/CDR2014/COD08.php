<?php require("../../includes/header.php"); ?><h1>Cersei and Her Energy Game</h1><div class="content">
<h2>Cersei And Her Energy Game</h2>
<p>Cersei Lannister likes to play difficult games but this Energy Game is little too difficult for her ,so you have to help her out.</p>
<p>There is a one-dimensional road. The road is separated into N consecutive parts. The parts are numbered 0 through N-1, in order. Cersei is going to walk from part 0 to part N-1.</p>
<p>Cersei also noticed that each part of the road has a color: either red, green, or blue. Part 0 is red.</p>
<p>Cersei is going to perform a sequence of steps. Each step must lead in the positive direction. That is, if her current part is i, the next step will take her to one of the parts i+1 through N-1, inclusive. Her steps can be arbitrarily long. However, longer steps are harder: a step of length j costs j*j energy.</p>
<p>Additionally, Cersei wants to step on colors in a specific order: red, green, blue, red, green, blue, ... That is, she starts on the red part 0, makes a step to a green part, from there to a blue part, and so on, always repeating red, green, and blue in a cycle. Note that the final part N-1 also has some color and thus Cersei must reach it in a corresponding step.</p>
<h3>INPUT:</h3>
<p>First line consist of 't' number of test cases. The next  't' lines, each line has a string representing the road (each string has 'N' elements) . For each i, element i of string is the color of part i: 'R' represents red, 'G' green, and 'B' blue.</p>
<h3>CONSTRAINTS:</h3>
<p>Following holds for each string in input:<br /></p>
<ul>
<li>string will contain between 2 and 15 characters, inclusive.
</li><li>each character of string will be either 'R' or 'G' or 'B'.
</li><li>The first character of string will be 'R'.
</li><li> 1&lt;= <b>t</b> &lt;=30
</li></ul>
<h3>OUTPUT:</h3>
<p>If Cersei can reach part N-1 in the way described above, print the smallest possible total cost of doing so. Otherwise, print -1.</p>
<h3>SAMPLE TEST CASES:</h3>
<h5>Input:</h5>
<pre>
6
RGGGB
RGBRGBRGB
RBBGGGRR
RBRRBGGGBBBBR
RG
RBRGBGBGGBGRGGG
</pre><h5>Output:</h5>
<pre>
8
8
-1
50
1
52
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>