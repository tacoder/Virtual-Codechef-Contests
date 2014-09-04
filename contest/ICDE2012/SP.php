<?php require("../../includes/header.php"); ?><h1>Strange Punishment</h1><div class="content">

<p>Once in a kingdom there lived a ruler who was very witty. Now one fine day his soldiers brought two robbers. In order to punish them the king ordered his men to draw &lsquo;N&rsquo; contiguous blocks and in the Nth block fire was setup. Now the king ordered both the robbers to step in the first block and told them the rules :<br/><br />
&bull;	The robbers would decide the next block where to jump.<br/><br />
&bull;	 They would decide alternately.<br/><br />
&bull;	 If they are in the &lsquo;k&rsquo;th block the next block can be k+1 or 2k.<br/><br />
&bull;	The robber who decides the block where to jump would step in that block first followed by the other.<br/><br />
&bull;	The first robber would start.<br/><br />
&bull;	They have to make a decision and cannot cross N<br />
So the robber who will have no other option than to choose the Nth block would die. The other robber would be freed for his wit.<br/><br />
Now you have find for an N which robber would die. Both the robbers are highly intelligent </br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>First line would contain T, the number of test case followed by T lines. In each line there would an N.<br />
1&lt;=T&lt;=50 1&lt;=N&lt;=(10^17) - 1</p>
<h3>Output</h3>
<p>For each test case you have to print who will be freed. Print either &ldquo;First&rdquo; or &ldquo;Second&rdquo;. For each test case answer in a new line</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
10
34


<b>Output:</b>
Second
First
Second

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jishnuunique">jishnuunique</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2012</td>
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