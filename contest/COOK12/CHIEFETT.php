<?php require("../../includes/header.php"); ?><h1>Pleasing Chief</h1><div class="content">

<p style="text-align:justify">Chef's girlfriend, Chief, is displeased with him. This is not a good sign for their<br />
	relationship, and as always, he has turned to you for help. He looks forward to take his girlfriend to shopping;<br />
	offering her to buy 'K' gifts. The shop that he is taking her to has 'N' unique items, that is,<br />
	there is single quantity of each item (its a very special shop, you see!).</p>
<p style="text-align:justify">Chef has with him, K discount coupons that he wishes to use. The shop's policy<br />
	only allows Chef to use one discount coupon on any one purchased item. That is why Chef is letting Chief buy K<br />
	gifts; he intends to use each coupon with him.</p>
<p style="text-align:justify">Chef of course cannot stop Chief from buying whatever she likes. Chief would select any K<br />
	gifts, from among the N items that the shop has. She makes selection of any K out of N items, uniformly. Suppose,<br />
	there are 5 items and Chef lets Chief buy 3, then she selects any of the 3 out of 5 items with the probability 1/10.</p>
<p style="text-align:justify">After Chief selects the items she wishes to buy, Chef will have to pay the bill. Smart as he<br />
	is, he would apply the K discount coupons on the K items (one on each) such that the discount he receives is as large<br />
	as possible.</p>
<p style="text-align:justify">Chef wants to prepare himself for this day. He knows beforehand the price of each item<br />
	in the shop. Can you tell him what expected discount can he expect? You have to tell him the expected discount<br />
	in the amount of money he can expect to save.</p>
<p style="font-size:1.5em;font-weight:bold">Input format</p>
<p style="text-align:justify">The first line contains the number T, the number of test cases. In the following lines,<br />
	T test cases follow (without any newlines between them.)<br />
Each case consists of only 3 lines.<br />
The first line of each test case contains N and K, separated by a single space.<br />
The second line contains N positive integers, the prices of the N items respectively, separated by a single space.<br />
The third line contains K positive integers (between 1 and 100, inclusive) separated by a single space. They represent<br />
the percentage of discount offered by the coupons, that Chef has, respectively.</p>
<p style="font-size:1.5em;font-weight:bold">Output format</p>
<p style="text-align:justify">For each test case, print the expected amount of money Chef should expect to save.<br />
	Output the result rounded to 3 digits after the decimal.</p>
<p style="font-size:1.5em;font-weight:bold">Constraints</p>
<p>1 ≤ T ≤ 50<br />
1 ≤ N ≤ 1000<br />
1 ≤ K ≤ N<br />
1 ≤ prices ≤ 10000</p>
<p style="font-size:1.5em;font-weight:bold">Sample input</p>
<pre>2
3 2
100 200 300
10 20
4 3
100 200 300 400
10 20 30

</pre><p style="font-size:1.5em;font-weight:bold">Sample output</p>
<pre>66.667
175.000

</pre><p style="font-size:1.5em;font-weight:bold">Explanation</p>
<p style="text-align:justify">In the second case, Chief can make the following selections:</p>
<ul>
<li>(100, 200, 300), with probability 1/4. Chef can apply the coupons to at best save 140.</li>
<li>(100, 200, 400), with probability 1/4. Chef can apply the coupons to at best save 170.</li>
<li>(100, 300, 400), with probability 1/4. Chef can apply the coupons to at best save 190.</li>
<li>(200, 300, 400), with probability 1/4. Chef can apply the coupons to at best save 200.</li>
</ul>
<p style="text-align:justify">Thus Chef can save an expected (140 + 170 + 190 + 200) / 4 = 175.000</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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