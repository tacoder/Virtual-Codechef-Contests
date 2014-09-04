<?php require("../../includes/header.php"); ?><h1>Galactik Football</h1><div class="content">
<p><b>WARNING</b> Large input/output files. Use faster I/O.</p>
<p>It's Galactik Football time! The Galactik Football Assosiation (GFA) has announced a football tournament between all the teams of all the planets in the galaxy (say <b>N</b>). Teams like Snow Kids, Shadows, Xenons, Red Tigers, Wambas, Pirates, etc. are in total enthusiasm and are practising hard to win the cup using their talent and flux.</p>
<p>Each planet of the galaxy has a government. Some governments have a <b>mutual agreement</b> between them. If planet <b>A</b> has mutual agreement with planet <b>B</b>, then there is a <b>bidirectional</b> <b>spaceway</b> between <b>A</b> and <b>B</b> using which anybody can go from <b>A</b> to <b>B</b> and <b>vice-versa</b>. People can use these spaceways to travel from one planet to another, if there exists a <b>path</b> between them using some of the spaceways.</p>
<p>Each planet has it's own football ground. The GFA has planned the matches in such a way that a team can have a match at any of these grounds. The GFA has come across some problems in the execution of their plan. They have found out that there are many pairs of planets between which there <b>does not exist any path</b>, so the football team of one of those planets can't reach the other planet. They requested the corresponding governments to make a spaceway between them, but because of absense of mutual agreement (duhhh.. Politics!), these goverment did not agree. So the GFA suggested that they will make teleports between some pairs of planets which will be used only by the football teams to travel.</p>
<p>But there are two types of governments in the galaxy<br />
<b>1.</b> Some of the governments are greedy (duhhh..). They want to make money (You don't say!) throught the GFA. So each of these government has asked the GFA for a tax value which it has to pay if it wants to make a teleport ending at their planet.<br /><br />
<b>2.</b> Others want to sponser the event, so they will give money to the GFA if they make a teleport ending at their planet (That's new..). The GFA would always avoid such governments no matter what the consequences are, because these kind of governments have always some dirty plans in their minds for the GFA.<br /></p>
<p>Now, the GFA wants to make bi-directional teleports between planets such that the football teams of any planet can reach any other planet to play a football match, using spaceways between the planets and/or teleports made by the GFA.</p>
<p>The GFA also has financial problems and want to spend as little money as possible. They have come to you so that you can help them calculate the minimum ammount of money needed to fulfill their plan.</p>
<h3>Input</h3>
<p>The first line of the input consists of two integers - <b>N</b> and <b>M</b>. <b>N</b> is number of planets and <b>M</b> is number of pairs of planets which have a mutual agreement, i.e they have a spaceway between them. Then, <b>M</b> lines follow, each containing two space separated integers <b>A</b> and <b>B</b>, denoting a mutual agreement and hence a spaceway to travel, between plenet <b>A</b> and planet <b>B</b>. Then, <b>N</b> lines follow. The <b>i<sup>th</sup></b> line has an integer <b>C</b>. If <b>C ≥ 0</b>, then it represents the tax value which the GFA has to pay to the government of planet i (it's a <b>type 1</b> government). If <b>C &lt; 0</b>, then it represents the money the ith government will pay to the GFA (it's a <b>type 2</b> government).</p>
<h3>Output</h3>
<p>Print the minimum amount needed for the GFA to fulfill their plan if it can be fulfilled, else print "-1" (without quotes).</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ N ≤ 100,000</b><br />
<b>0 ≤ M ≤ 1,000,000</b><br />
<b>0 ≤ |C| ≤ 10,000</b><br />
<b>1 ≤ A,B ≤ N</b><br />
<b>A ≠ B</b></p>
<h3>Sample</h3>
<pre>
<b>Input 1</b>
6 6
1 2
2 3
1 3
4 5
5 6
4 6
1
3
5
2
4
6

<b>Output 1</b>
3


<b>Input 2</b>
3 1
2 3
1
-1
-1

<b>Output 2</b>
-1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jay_adm">jay_adm</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2013</td>
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