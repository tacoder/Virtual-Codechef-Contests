<?php require("../../includes/header.php"); ?><h1>The Glittering Caves of Aglarond</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>The Glittering Caves of Aglarond<br /> </h2>
<p> <i>'Strange are the ways of Men, Legolas! Here they have one of the marvels of the Northern World, and what do they say of it? Caves, they say!     Caves! Holes to fly to in time of war, to store fodder in! My good Legolas, do you know that the caverns of Helm's Deep are vast and beautiful?     There would be an endless pilgrimage of Dwarves, merely to gaze at them, if such things were known to be. Aye indeed, they would pay pure gold for a brief glance!<br />     'And, Legolas, when the torches are kindled and men walk on the sandy floors under the echoing domes, ah! then, Legolas, gems and crystals and veins of     precious ore glint in the polished walls; and the light glows through folded marbles, shell-like, translucent as the living hands of Queen Galadriel.'</i> - Gimli, describing to Legolas the Glittering Caves of Aglarond.</p>
<p> While these caves are by and large natural, there is one place where the Men of Rohan have chiseled into the rock to create a magnificent exhibit. You have a wall of the cave consisting of 'lighted diamonds' arranged in a <b>N</b> by <b>M</b> grid (basically, you have a light behind each diamond which can be turned on or off). Further, you have a switch corresponding to each <b>row</b> of this diamond-grid. When you operate a switch, it will toggle (flip) the lights corresponding to that row.</p>
<p> You are given the current configuration of the lighted diamonds. Gimli challenges Legolas to turn on as many diamonds as possible using EXACTLY <b>K</b> on/off operations of the switches. Since Legolas is an Elf of the Wood and doesn't care much for things that glitter, he instead asks for your help. Note that the same switch (i.e. row) can be chosen multiple times.</p>
<h3>Input (STDIN):</h3>

<p> The first line contains the number of test cases <b>T</b>. Each test case contains <b>N</b>, <b>M</b> and <b>K</b> on the first line followed by <b>N</b> lines containing <b>M</b> characters each. The ith line denotes the state of the diamonds in the ith row, where '*' denotes a diamond which is on and '.' denotes a diamond which is off.</p>
<h3>Output (STDOUT):</h3>

<p> Output <b>T</b> lines containing the answer for the corresponding case.<br /> Between successive test cases, there should not be any blank lines in the output.</p>
<h3>Constraints:</h3>

<p> <b>1 &lt;= T &lt;= 100<br /> 1 &lt;= N,M &lt;= 50<br /> 1 &lt;= K &lt;= 100</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> 2 2 1<br /> ..<br /> **<br /> 2 2 2<br /> ..<br /> **</span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 4<br /> 2<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> In the first test case, row 1 can be toggled hence leaving all 4 lights to be in the ON state.<br /> In the second test case, row 1 (or row 2) can be toggled twice, hence maintaining the state of the initial configuration. </p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>