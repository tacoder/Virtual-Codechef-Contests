<?php require("../../includes/header.php"); ?><h1>Uncle Johny</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/JOHNY.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/JOHNY.PDF"> Russian</a>.</h3>
<p>Vlad enjoys listening to music. He lives in Sam's Town. A few days ago he had a birthday, so his parents gave him a gift: MP3-player! Vlad was the happiest man in the world! Now he can listen his favorite songs whenever he wants!</p>
<p>Vlad built up his own playlist. The playlist consists of <b>N</b> songs, each has a <b>unique</b> positive integer length. Vlad likes all the songs from his playlist, but there is a song, which he likes more than the others. It's named "Uncle Johny".</p>
<p>After creation of the playlist, Vlad decided to sort the songs in increasing order of their lengths. For example, if the lengths of the songs in playlist was {1, 3, 5, 2, 4} after sorting it becomes {1, 2, 3, 4, 5}. Before the sorting, "Uncle Johny" was on <b>K</b>-th position (1-indexing is assumed for the playlist) in the playlist.</p>
<p>Vlad needs your help! He gives you all the information of his playlist. Your task is to find the position of "Uncle Johny" in  the sorted playlist.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each test case contains one integer <b>N</b> denoting the number of songs in Vlad's playlist. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the lenghts of Vlad's songs.<br />
The third line contains the only integer <b>K</b> - the position of "Uncle Johny" in the initial playlist.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the position of "Uncle Johny" in the sorted playlist.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 1000</p>
<p>1 ≤ <b>K</b> ≤ <b>N</b> ≤ 100</p>
<p>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 3 4 2
2
5
1 2 3 9 4
5
5
1 2 3 9 4 
1

<b>Output:</b>
3
4
1
</pre><p> </p>
<h3>Explanation</h3>
<p>In the example test there are <b>T</b>=3 test cases.</p>
<p><b>Test case 1</b></p>
<p>In the first test case <b>N</b> equals to 4, <b>K</b> equals to 2, <b>A</b> equals to {1, 3, 4, 2}. The answer is <b>3</b>, because {1, 3, 4, 2} -&gt; {1, 2, 3, 4}. <b>A<sub>2</sub></b> now is on the <b>3</b>-rd position.</p>
<p><b>Test case 2</b></p>
<p>In the second test case <b>N</b> equals to 5, <b>K</b> equals to 5, <b>A</b> equals to {1, 2, 3, 9, 4}. The answer is <b>4</b>, because {1, 2, 3, 9, 4} -&gt; {1, 2, 3, 4, 9}. <b>A<sub>5</sub></b> now is on the <b>4</b>-th position.</p>
<p><b>Test case 3</b></p>
<p>In the third test case <b>N</b> equals to 5, <b>K</b> equals to 1, <b>A</b> equals to {1, 2, 3, 9, 4}. The answer is <b>1</b>, because {1, 2, 3, 9, 4} -&gt; {1, 2, 3, 4, 9}. <b>A<sub>1</sub></b> stays on the <b>1</b>-th position.</p>
<h3>Note</h3>
<p><a target="_blank" href="http://www.last.fm/music/The+Killers/_/Uncle+Johny">"Uncle Johny"</a> is a real song performed by The Killers.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-10-2013</td>
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
    </table> <?php require("../../includes/footer.php"); ?>