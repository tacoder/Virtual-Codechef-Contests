<?php require("../../includes/header.php"); ?><h1>Little Elephant and Music</h1><div class="content">

<p>The Little Elephant from the Zoo of Lviv likes listening to music.</p>
<p>There are <b>N</b> songs, numbered from <b>1</b> to <b>N</b>, in his MP3-player. The song <b>i</b> is described by a pair of integers <b>B<sub>i</sub></b> and <b>L<sub>i</sub></b> - the band (represented as integer) that performed that song and the length of that song in seconds. The Little Elephant is going to listen all the songs exactly once in some order.</p>
<p>The sweetness of the song is equal to the product of the length of that song and the number of different bands listened before (including the current playing song).</p>
<p>Help the Little Elephant to find the order that maximizes the total sweetness of all <b>N</b> songs. Print that sweetness.</p>
<h3>Input</h3>
<p> </p>
<p>The first line of the input contains single integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains single integer <b>N</b>, denoting the number of the songs. The next <b>N</b> lines describe the songs in the MP3-player. The <b>i</b>-th line contains two space-sparated integers <b>B<sub>i</sub></b> and <b>L<sub>i</sub></b>.</p>
<h3>Output</h3>
<p> </p>
<p>For each test, output the maximum total sweetness.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 5</b></li>
<li><b>1 ≤ N ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>1 ≤ B<sub>i</sub>, L<sub>i</sub> ≤ 1000000000 (10<sup>9</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2
2 2
3 2
3
2 3
1 2
2 4

<b>Output:</b>
12
16
</pre><h3>Explanation</h3>
<p> </p>
<p>In the first sample: if he listens the songs in given order, then<br /><b>B<sub>1</sub>=1, L<sub>1</sub>=2</b>: the sweetness = <b>2</b> * <b>1</b> = <b>2</b><br /><b>B<sub>2</sub>=2, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>2</b> = <b>4</b><br /><b>B<sub>3</sub>=3, L<sub>3</sub>=2</b>: the sweetness = <b>2</b> * <b>3</b> = <b>6</b><br />So the total sweetness is <b>12</b>. In this case, you can check the total sweetness does not depend on the order of the songs.</p>
<p>In the second sample: if he listens the songs in given order, then<br /><b>B<sub>1</sub>=2, L<sub>1</sub>=3</b>: the sweetness = <b>3</b> * <b>1</b> = <b>3</b><br /><b>B<sub>2</sub>=1, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>2</b> = <b>4</b><br /><b>B<sub>3</sub>=2, L<sub>3</sub>=4</b>: the sweetness = <b>4</b> * <b>2</b> = <b>8</b><br />So the total sweetness is <b>15</b>. However, he listens the song <b>2</b> firstly, then<br /><b>B<sub>2</sub>=1, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>1</b> = <b>2</b><br /><b>B<sub>1</sub>=2, L<sub>1</sub>=3</b>: the sweetness = <b>3</b> * <b>2</b> = <b>6</b><br /><b>B<sub>3</sub>=2, L<sub>3</sub>=4</b>: the sweetness = <b>4</b> * <b>2</b> = <b>8</b><br />So the total sweetness is <b>16</b>, and it is the maximum total sweetness.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>