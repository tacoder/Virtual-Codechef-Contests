<?php require("../../includes/header.php"); ?><h1>Player</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/RRPLAYER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/RRPLAYER.pdf">Russian</a> as well.</h3>
<p>Petr, Nikita G. and Nikita are the most influential music critics in Saint-Petersburg. They have recently downloaded their favorite band's new album and going to listen to it. Nikita claims that the songs of entire album should be listened strictly in the same order as they are given, because there is the secret message from the author in the songs' order. Petr, being chaotic, does not think so, hence he loves listening to songs in a random order. Petr is pretty good in convincing other people, so after a two-hours discussion Nikita accepted listening in random order(the discussion's duration was like three times longer thatn the album's one). In this context random order means following: There are <b>N</b> songs in the album. In the very beginning random song is chosen(here and further "random song" means that every song has equal probability to be chosen). After some song is over the next one is chosen randomly and independently of what have been played before. <br /><br />
Nikita G., being the only one who is not going to drop out from the university, wonders, what is the expected number of songs guys have to listen to until every song is played at least once.
</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br />
The first and only line of each test case contains a single integer <b>N</b> denoting the number of songs in the album.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the expected number of songs the guys will listen to. Your answer will be considered as correct if it has an absolute or relative error less than <b>10<sup>−1</sup></b>. More formally if the expected output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if<br /><b>|A − B| ≤ 10<sup>−1</sup> * max{|A|, |B|, 1}</b>.
</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 3000 </b></li>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3


<b>Output:</b>
1.0
3.0
5.5


</pre>
<h3>Explanation</h3>
<p><b>Example case 2</b> After playing the first song there is <b>1/2</b> chance to finish the album each time new song is played. So the expected number of songs is <b>2/2 + 3/4 + 4/8... = 3</b> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>